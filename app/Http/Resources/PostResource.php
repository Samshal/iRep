<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostResource extends JsonResource
{
    public static function getPostInteractionData($postId, $accountId): array
    {
        return [
            'comment_count' => DB::table('comments')
                ->where('post_id', $postId)
                ->count() ?? 0,

            'likes_count' => DB::table('likes')
                ->where('entity_id', $postId)
                ->count() ?? 0,

            'reposts_count' => DB::table('reposts')
                ->where('entity_id', $postId)
                ->count() ?? 0,

            'bookmarks_count' => DB::table('bookmarks')
                ->where('entity_id', $postId)
                ->count() ?? 0,

            'current_user_liked' => DB::table('likes')
                ->where('entity_id', $postId)
                ->where('entity_type', 'post')
                ->where('account_id', $accountId)
                ->exists(),

            'current_user_reposted' => DB::table('reposts')
                ->where('entity_id', $postId)
                ->where('entity_type', 'post')
                ->where('account_id', $accountId)
                ->exists(),

            'current_user_bookmarked' => DB::table('bookmarks')
                ->where('entity_id', $postId)
                ->where('entity_type', 'post')
                ->where('account_id', $accountId)
                ->exists(),
        ];
    }

    public function toArray($request)
    {
        $data = is_object($this->resource) ? $this->resource : (object) $this->resource;
        $postData = property_exists($data, 'post_data') ? json_decode($data->post_data) : null;

        $commentCount = DB::table('comments')
            ->where('post_id', $data->id)
            ->count() ?? 0;

        $postInteractionData = self::getPostInteractionData($data->id, Auth::id());

        $badge = 0;
        if ($data->author_kyced) {
            $accountType = (int) $data->author_account_type;

            if ($accountType === 1) {
                $badge = 1;
            } elseif ($accountType === 2) {
                $badge = 2;
            }
        }

        $responseArray = [
            'post_source' => $data->post_source ?? null,
            'id' => $data->id,
            'title' => $data->title,
            'context' => $data->context,
            'post_type' => $data->post_type,
            'author' => $data->author,
            'author_id' => $data->author_id ?? null,
            'author_badge' => $badge,
            'author_photo_url' => $data->author_photo ?? null,
            'reported' => $data->reported ?? null,
            'post_status' => $data->post_status ?? null,
            'created_at' => $data->created_at,
            'media' => property_exists($data, 'media') ? json_decode($data->media, true) : null,
            'comments' => $commentCount,
            'likes' => $postInteractionData['likes_count'],
            'reposts' => $postInteractionData['reposts_count'],
            'bookmarks' => $postInteractionData['bookmarks_count'],
            'current_user_liked' => $postInteractionData['current_user_liked'],
            'current_user_reposted' => $postInteractionData['current_user_reposted'],
            'current_user_bookmarked' => $postInteractionData['current_user_bookmarked'],
        ];

        if ($data->post_type === 'petition') {

            $responseArray['signatures'] = $postData->signatures ?? $data->signatures ?? 0;
            $responseArray['target_signatures'] = $postData->target_signatures ?? $data->target_signatures ?? 0;
            $responseArray['target_representatives'] = $postData->target_representatives ?? $data->target_representatives ?? [];
        }
        return $responseArray;
    }

    public function toDetailArray($request)
    {
        $postData = json_decode($this->post_data, true);

        $responseArray = $this->toArray($request);

        // Get the author_id of the post
        $authorId = $responseArray['author_id'] ?? null;

        // Get regular comments
        $comments = DB::table('comments')
            ->leftJoin('accounts', 'comments.account_id', '=', 'accounts.id')
            ->where('post_id', $responseArray['id'])
            ->whereNull('parent_id')
            ->where('comments.supporter', false)
            ->select(
                'comments.*',
                'accounts.id AS author_id',
                'accounts.name AS author_name',
                'accounts.photo_url AS author_photo_url'
            )
            ->get();

        // Get supporter comments only if the post author is the authenticated user
        $supporterComments = collect([]);
        if ($authorId == Auth::id()) {
            $supporterComments = DB::table('comments')
                ->leftJoin('accounts', 'comments.account_id', '=', 'accounts.id')
                ->where('post_id', $responseArray['id'])
                ->whereNull('parent_id')
                ->where('comments.supporter', true)
                ->select(
                    'comments.*',
                    'accounts.id AS author_id',
                    'accounts.name AS author_name',
                    'accounts.photo_url AS author_photo_url'
                )
                ->get();
        }

        if (isset($postData['petition_status'])) {
            $responseArray['petition_status'] = $postData['petition_status'];
        }

        if (isset($postData['approvals'])) {
            $responseArray['approvals'] = $postData['approvals'];
        }

        if (isset($postData['category'])) {
            $responseArray['category'] = $postData['category'];
        }

        if (isset($postData['target_representatives'])) {
            $responseArray['target_representatives'] = $postData['target_representatives'];
        }

        if (isset($postData['signatures'])) {
            $responseArray['signatures'] = $postData['signatures'];
        }

        if (isset($postData['target_signatures'])) {
            $responseArray['target_signatures'] = $postData['target_signatures'];
        }

        // Handle regular comments
        if ($comments->isNotEmpty()) {
            $nestedComments = collect($comments)->map(function ($comment) use ($request) {
                return (new CommentResource($comment))->toDetailArray($request);
            });

            $responseArray['comments'] = $nestedComments;
        }

        // Handle supporter comments
        if ($supporterComments->isNotEmpty()) {
            $supporterNestedComments = collect($supporterComments)->map(function ($comment) use ($request) {
                return (new CommentResource($comment))->toDetailArray($request);
            });

            $responseArray['supporters'] = $supporterNestedComments;
        }

        return $responseArray;
    }
}
