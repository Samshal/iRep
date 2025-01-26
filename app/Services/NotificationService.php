<?php

namespace App\Services;

use App\Jobs\SendNotification;
use Illuminate\Support\Facades\DB;

class NotificationService
{
    public function broadcast(
        string $entityType,
        int $entityId,
        string $titleTemplate,
        string $bodyTemplate,
        array $replacements = [],
        array $userIds = null,
        array $criteria = [],
        string $table = 'accounts',
    ): void {
        if (is_null($userIds)) {
            $query = DB::table($table);

            foreach ($criteria as $key => $value) {
                if (is_array($value)) {
                    $query->whereIn($key, $value);
                } else {
                    $query->where($key, $value);
                }
            }

            $userIds = $query->pluck('id')->toArray();
        }

        foreach ($userIds as $userId) {
            $this->send(
                entityType: $entityType,
                entityId: $entityId,
                accountId: $userId,
                titleTemplate: $titleTemplate,
                bodyTemplate: $bodyTemplate,
                replacements: $replacements
            );
        }
    }

    public function send(
        string $entityType,
        int $entityId,
        int $accountId,
        string $titleTemplate,
        string $bodyTemplate,
        array $replacements = [],
        string $table = 'user'
    ): void {
        $title = empty($replacements)
            ? $titleTemplate
            : str_replace(array_keys($replacements), array_values($replacements), $titleTemplate);

        $body = empty($replacements)
            ? $bodyTemplate
            : str_replace(array_keys($replacements), array_values($replacements), $bodyTemplate);

        // Dispatch notification job
        SendNotification::dispatch($entityType, [
            'table'      => $table,
            'entity_id'  => $entityId,
            'account_id' => $accountId,
            'title'      => $title,
            'body'       => $body,
        ]);
    }
}
