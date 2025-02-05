<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Admin\Factories\UserManagementFactory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\AccountResource;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends AccountController
{
    protected $userManagementFactory;

    public function __construct(UserManagementFactory $userManagementFactory)
    {
        parent::__construct();
        $this->userManagementFactory = $userManagementFactory;
    }

    public function getCivilianCounts()
    {
        $counts = $this->userManagementFactory->getAccountStats(1);

        return response()->json($counts);
    }

    public function getRepresentativeCounts()
    {
        $counts = $this->userManagementFactory->getAccountStats(2);

        return response()->json($counts);
    }

    public function getAccountsByType(Request $request, $accountType)
    {
        $params = $request->only(['search', 'status', 'page', 'page_size']);

        $accounts = $this->userManagementFactory->getAccounts($params, $accountType);

        return response()->json($accounts);
    }

    public function getCivilians(Request $request)
    {
        return $this->getAccountsByType($request, 1);
    }

    public function getRepresentatives(Request $request)
    {
        return $this->getAccountsByType($request, 2);
    }

    public function approveAccount($accountId)
    {
        $this->userManagementFactory->approveAccount($accountId);

        $account = $this->findEntity('account', $accountId);

        try {
            // General notification for regular account approval
            if ($account->account_type == 1) {
                $this->sendNotification(
                    entityType: 'account',
                    entityId: $accountId,
                    accountId: $accountId,
                    titleTemplate: 'Account Verified',
                    bodyTemplate:
                        'Your account has been verified. You can now access all the features of the platform.'
                );
            }

            // Representative-specific notifications
            if ($account->account_type == 2) {
                $this->sendNotification(
                    entityType: 'account',
                    entityId: $accountId,
                    accountId: $accountId,
                    titleTemplate: 'Application Approved',
                    bodyTemplate:
                        'Your application to become a representative has been approved. You can now interact with civilians.'
                );

                // Broadcast notification for new representatives
                $criteria = [];

                if ($account->local_government_id) {
                    $criteria['local_government_id'] = $account->local_government_id;
                }

                if ($account->state_id) {
                    $criteria['state_id'] = $account->state_id;
                }

                $this->broadcastNotification(
                    entityType: 'account',
                    entityId: $account->id,
                    accountId: $accountId,
                    titleTemplate: '{name} is now on iRep',
                    bodyTemplate: '{name} just joined iRep as a representative. You can now interact with them.',
                    replacements: [
                        '{name}' => ($account->accountData->position ?? '') . $account->name
                    ],
                    criteria: $criteria
                );
            }

            $this->accountFactory->indexAccount($accountId);
            $this->logActivity("approve", "account", $accountId, Auth::id());

            return response()->json($accountId);

        } catch (\Exception $e) {
            Log::error("Failed to send notifications for account approval: " . $e->getMessage());
            return response()->json(['error' => 'Notification failed'], 500);
        }
    }

    public function upgradeAccount($accountId)
    {
        $account = $this->userManagementFactory->upgradetoRepresentative($accountId);
        $this->accountFactory->indexAccount($accountId);

        $this->logActivity("upgrade", "account", $accountId, Auth::id());

        return response()->json($account);
    }

    public function declineAccount($accountId)
    {
        $account = $this->userManagementFactory->disapproveAccount($accountId);

        app('notification')->send(
            entityType: 'account',
            entityId: $accountId,
            accountId: $accountId,
            titleTemplate: 'Account Verification Declined',
            bodyTemplate:
                'Your account has been declined. Please contact support for more information.'
        );

        $this->logActivity("decline", "account", $accountId, Auth::id());

        return response()->json($account);
    }

    public function suspendAccount($accountId)
    {
        $account = $this->userManagementFactory->suspendAccount($accountId);

        $this->logActivity("suspend", "account", $accountId, Auth::id());
        return response()->json($account);
    }

    public function reinstateAccount($accountId)
    {
        $account = $this->userManagementFactory->unsuspendAccount($accountId);
        $this->logActivity("reinstate", "account", $accountId, Auth::id());

        return response()->json($account);
    }

    public function deleteAccount($accountId)
    {
        $usersPosts = $this->getPostIdsByUser($accountId);

        $account = $this->userManagementFactory->deleteAccount($accountId);
        $this->logActivity("delete", "account", $accountId, Auth::id());



        app('search')->deleteData('accounts', $accountId);
        foreach ($usersPosts as $postId) {
            app('search')->deleteData('posts', $postId);
        }

        return response()->json($account);
    }

    public function showAccount($accountId, Request $request)
    {
        if (!is_int($accountId) && !ctype_digit($accountId)) {
            return response()->json([
                'message' => 'Invalid ID. The ID must be an integer.'
            ], 400);
        }

        $account = $this->findEntity('account', $accountId);

        return response()->json((new AccountResource($account))->toAdminViewArray($request), 200);

    }
}
