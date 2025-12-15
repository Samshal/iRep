<?php

namespace Database\Seeders;

use Database\Factories\MessageFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DemoSocialSeeder extends Seeder
{
    /**
     * Seed social / engagement data:
     * - direct messages between random accounts
     * - likes, bookmarks, and reposts on posts
     *
     * Designed to be re-runnable thanks to unique constraints on
     * likes/bookmarks/reposts and the fact that messages are just noise.
     */
    public function run(): void
    {
        $this->command?->info('Seeding demo social interactions (messages, likes, bookmarks, reposts)...');

        $accountIds = DB::table('accounts')->pluck('id')->all();
        $postIds = DB::table('posts')->pluck('id')->all();

        if (empty($accountIds) || empty($postIds)) {
            $this->command?->warn('No accounts or posts found, skipping social seeding.');
            return;
        }

        $this->seedMessages($accountIds);
        $this->seedPostReactions($accountIds, $postIds);
    }

    protected function seedMessages(array $accountIds): void
    {
        $messageFactory = new MessageFactory();

        $conversationCount = 60;

        for ($i = 0; $i < $conversationCount; $i++) {
            $pair = Arr::random($accountIds, 2);
            $senderId = $pair[0];
            $receiverId = $pair[1];

            $messagesInThread = rand(3, 10);

            for ($m = 0; $m < $messagesInThread; $m++) {
                $data = [
                    'sender_id' => $m % 2 === 0 ? $senderId : $receiverId,
                    'receiver_id' => $m % 2 === 0 ? $receiverId : $senderId,
                    'message' => 'Demo message ' . ($m + 1) . ' between accounts ' . $senderId . ' and ' . $receiverId,
                    'sent_at' => now()->subDays(rand(0, 15))->subMinutes(rand(0, 1440)),
                ];

                $messageFactory->insertMessage($data);
            }
        }
    }

    protected function seedPostReactions(array $accountIds, array $postIds): void
    {
        foreach ($postIds as $postId) {
            // Random subset of users who liked / bookmarked / reposted this post
            $likers = (array) Arr::random($accountIds, rand(5, min(40, count($accountIds))));
            $bookmarkers = (array) Arr::random($accountIds, rand(3, min(25, count($accountIds))));
            $reposters = (array) Arr::random($accountIds, rand(1, min(15, count($accountIds))));

            foreach ($likers as $accountId) {
                DB::table('likes')->insertOrIgnore([
                    'entity_id' => $postId,
                    'entity_type' => 'post',
                    'account_id' => $accountId,
                ]);
            }

            foreach ($bookmarkers as $accountId) {
                DB::table('bookmarks')->insertOrIgnore([
                    'entity_id' => $postId,
                    'entity_type' => 'post',
                    'account_id' => $accountId,
                ]);
            }

            foreach ($reposters as $accountId) {
                DB::table('reposts')->insertOrIgnore([
                    'entity_id' => $postId,
                    'entity_type' => 'post',
                    'account_id' => $accountId,
                ]);
            }
        }
    }
}




