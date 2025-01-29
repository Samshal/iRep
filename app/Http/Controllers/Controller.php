<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Database\Factories\AccountFactory;
use Database\Factories\PostFactory;
use Database\Factories\CommentFactory;
use Database\Factories\MessageFactory;
use Database\Factories\HomePageFactory;
use Database\Factories\NewsFeedFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Jobs\SendNotification;
use Illuminate\Support\Facades\Log;

abstract class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    protected $db;
    protected $accountFactory;
    protected $postFactory;
    protected $commentFactory;
    protected $messageFactory;
    protected $homeFactory;
    protected $newsFeedFactory;

    /**
     * Create a new Controller instance and initialize the database connection.
     *
     * @return void
     */
    public function __construct()
    {
        $this->db = DB::connection()->getPdo();
        $this->accountFactory = new AccountFactory();
        $this->postFactory = new PostFactory();
        $this->commentFactory = new CommentFactory();
        $this->messageFactory = new MessageFactory();
        $this->homeFactory = new HomePageFactory();
        $this->newsFeedFactory = new NewsFeedFactory();
    }

    /**
     * Generate a token response.
     *
     * @param  string  $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function tokenResponse($token, $statusCode = 200, $expires_in = null)
    {
        if (is_null($expires_in)) {
            $expires_in = Auth::factory()->getTTL() * 60;
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $expires_in,
        ], $statusCode);
    }

    /**
     * Toggle an action (like, unlike, repost e.t.c) on a post or comment.
     *
     * @param  string  $entity
     * @param  string  $actionType
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function toggleAction($entity, $actionType, $id)
    {
        $this->findEntity($entity, $id);

        $accountId = Auth::id();
        $result = $this->{$entity . 'Factory'}->toggleAction($actionType, $id, $accountId);

        if ($result === 'added') {
            $entityData = $this->findEntity($entity, $id);

            $notificationMessages = [
                'likes' => [
                    'title' => 'Someone liked your {entity}',
                    'body'  => '{name} liked your {entity}',
                ],
                'reposts' => [
                    'title' => 'Someone reposted your {entity}',
                    'body'  => '{name} reposted your {entity}',
                ],
                'bookmarks' => [
                    'title' => 'Someone bookmarked your {entity}',
                    'body'  => '{name} bookmarked your {entity}',
                ],
            ];

            $notificationTemplate = $notificationMessages[$actionType] ?? [
                'title' => 'Activity on your {entity}',
                'body'  => '{name} interacted with your {entity}',
            ];

            $replacements = [
                '{name}' => Auth::user()->name,
                '{entity}' => $entity,
            ];

            app('notification')->send(
                entityType: $entity,
                entityId: $id,
                accountId: $entityData->author_id,
                titleTemplate: $notificationTemplate['title'],
                bodyTemplate: $notificationTemplate['body'],
                replacements: $replacements
            );
        }

        return response()->json(['message' => $result], 200);
    }

    /**
     * Find an entity (account, post, comment etc).
     *
     * @param  string  $type
     * @param  int  $id
     * @return mixed
     */
    public function findEntity($type, $id)
    {
        if ($type === 'post') {
            $data = $this->postFactory->getPost($id);
        } elseif ($type === 'comment') {
            $data = $this->commentFactory->getComment($id);
        } elseif ($type === 'account') {
            $data = $this->accountFactory->getAccount($id);
        } else {
            abort(400, 'Invalid entity type');
        }

        if (!$data) {
            abort(404, "{$type} not found");
        }

        return $data;
    }

    public function reportEntity($entityType, $entityId, $reporterId, $reason)
    {
        $query = "
		INSERT INTO reports (entity_id, entity_type, reporter_id, reason)
		VALUES (?, ?, ?, ?)";

        $stmt = $this->db->prepare($query);
        $stmt->execute([$entityId, $entityType, $reporterId, $reason]);
    }

    public static function getAccountType($db, $accountId)
    {
        $query = "SELECT * FROM account_types WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$accountId]);

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $result ?: null;
    }

    public function getPermissionByName($permissionName)
    {
        $query = "SELECT id FROM permissions WHERE name = ? LIMIT 1";

        $stmt = $this->db->prepare($query);
        $stmt->execute([$permissionName]);

        return $stmt->fetchColumn();
    }

    public function logActivity($action, $entityType, $entityId, $adminId)
    {
        try {
            $query = "
				INSERT INTO admin_activities (admin_id, entity_type, entity_id, action, description, created_at)
				VALUES (?, ?, ?, ?, ?, NOW())
			";

            $stmt = $this->db->prepare($query);
            $stmt->execute([$adminId, $entityType, $entityId, $action, $this->generateDescription($action, $entityType)]);
        } catch (\Exception $e) {
            Log::error("Failed to log activity: " . $e->getMessage());
        }

    }

    private function generateDescription($action, $entityType)
    {
        switch ($action) {
            case 'create':
                return "Created new {$entityType}.";
            case 'delete':
                return "Deleted {$entityType}.";
            case 'suspend':
                return "Suspended {$entityType}";
            case 'reinstate':
                return "Reinstated {$entityType}";
            case 'approve':
                return "Approved {$entityType}.";
            case 'upgrade':
                return "Upgraded {$entityType}.";
            case 'decline':
                return "Declined {$entityType}.";
            case 'ignore':
                return "Ignored {$entityType}.";
            default:
                return "Performed an action on a {$entityType}.";
        }
    }

}
