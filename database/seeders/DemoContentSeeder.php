<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DemoContentSeeder extends Seeder
{
    /**
     * Seed a large amount of demo data for local development:
     * - extra citizen accounts
     * - many petitions / eyewitness posts
     * - comments and replies
     * - simple notifications for activity
     * - demo news feed items in the search index
     */
    public function run(): void
    {
        $faker = Faker::create();

        $this->command?->info('Seeding rich demo data (accounts, posts, comments, notifications, news feed)...');

        // Cache some lookup data
        $stateIds = DB::table('states')->pluck('id')->all();
        $localGovernmentIds = DB::table('local_governments')->pluck('id')->all();

        // 1. Extra citizen accounts
        $extraAccountsToCreate = 150;
        $extraAccountIds = [];

        for ($i = 0; $i < $extraAccountsToCreate; $i++) {
            $extraAccountIds[] = DB::table('accounts')->insertGetId([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('password456'),
                'phone_number' => $faker->numerify('080########'),
                'gender' => $faker->randomElement(['male', 'female']),
                'dob' => $faker->date(),
                'location' => $faker->address(),
                'state_id' => ! empty($stateIds) ? Arr::random($stateIds) : null,
                'local_government_id' => ! empty($localGovernmentIds) ? Arr::random($localGovernmentIds) : null,
                'email_verified' => true,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $allAccountIds = DB::table('accounts')->pluck('id')->all();
        $representativeAccountIds = DB::table('representatives')->pluck('account_id')->all();

        // 2. Create many posts (petitions + eyewitness)
        $totalPosts = 120;
        $postIds = [];

        $petitionImages = [
            'https://i.imgur.com/6OiQwEJ.jpeg',
            'https://i.imgur.com/cl7CDK6.jpeg',
            'https://i.imgur.com/DI5HhNd.jpeg',
            'https://i.imgur.com/SMBmLqX.jpeg',
            'https://i.imgur.com/vSltOz5.jpeg',
        ];

        $eyewitnessImages = [
            'https://i.imgur.com/bNSRtUa.jpeg',
            'https://i.imgur.com/ZGBLL5r.jpeg',
            'https://i.imgur.com/68BVZ0K.jpeg',
            'https://i.imgur.com/8OFejgA.jpeg',
        ];

        for ($i = 0; $i < $totalPosts; $i++) {
            $type = $faker->randomElement(['petition', 'eyewitness']);
            $creatorId = Arr::random($allAccountIds);

            $title = $type === 'petition'
                ? $faker->sentence(6) . ' (Petition)'
                : $faker->sentence(6) . ' (Eyewitness)';

            $media = $type === 'petition'
                ? $faker->randomElements($petitionImages, rand(1, 3))
                : $faker->randomElements($eyewitnessImages, rand(1, 3));

            $postId = DB::table('posts')->insertGetId([
                'post_type' => $type,
                'title' => $title,
                'context' => $faker->paragraphs(rand(2, 4), true),
                'media' => json_encode($media),
                'creator_id' => $creatorId,
                'status' => 'active',
                'created_at' => now()->subDays(rand(0, 30)),
                'updated_at' => now(),
            ]);

            $postIds[] = $postId;

            if ($type === 'petition') {
                $targetSignatures = $faker->numberBetween(50, 500);
                $currentSignatures = $faker->numberBetween(0, $targetSignatures);

                $petitionId = DB::table('petitions')->insertGetId([
                    'post_id' => $postId,
                    'signatures' => $currentSignatures,
                    'target_signatures' => $targetSignatures,
                    'status' => $currentSignatures >= $targetSignatures ? 'submitted' : 'open',
                ]);

                if (! empty($representativeAccountIds)) {
                    $targets = $faker->randomElements(
                        $representativeAccountIds,
                        min(count($representativeAccountIds), rand(1, 4))
                    );

                    foreach (array_unique($targets) as $repId) {
                        DB::table('petition_representatives')->insert([
                            'petition_id' => $petitionId,
                            'representative_id' => $repId,
                        ]);
                    }
                }
            } else {
                DB::table('eye_witness_reports')->insert([
                    'post_id' => $postId,
                    'approvals' => $faker->numberBetween(0, 200),
                    'category' => $faker->randomElement(['crime', 'accident', 'other']),
                ]);
            }
        }

        // 3. Comments and replies
        $commentIdsPerPost = [];

        foreach ($postIds as $postId) {
            $topLevelComments = rand(3, 8);
            $commentIdsPerPost[$postId] = [];

            for ($i = 0; $i < $topLevelComments; $i++) {
                $commentId = DB::table('comments')->insertGetId([
                    'parent_id' => null,
                    'post_id' => $postId,
                    'account_id' => Arr::random($allAccountIds),
                    'comment' => $faker->sentence(rand(8, 18)),
                    'supporter' => (bool) rand(0, 1),
                    'status' => 'active',
                    'commented_at' => now()->subDays(rand(0, 30)),
                ]);

                $commentIdsPerPost[$postId][] = $commentId;
            }

            // Replies
            $parentsForReplies = $faker->randomElements(
                $commentIdsPerPost[$postId],
                min(count($commentIdsPerPost[$postId]), rand(2, 5))
            );

            foreach ($parentsForReplies as $parentId) {
                $replies = rand(1, 4);
                for ($i = 0; $i < $replies; $i++) {
                    DB::table('comments')->insert([
                        'parent_id' => $parentId,
                        'post_id' => $postId,
                        'account_id' => Arr::random($allAccountIds),
                        'comment' => $faker->sentence(rand(6, 16)),
                        'supporter' => (bool) rand(0, 1),
                        'status' => 'active',
                        'commented_at' => now()->subDays(rand(0, 30)),
                    ]);
                }
            }
        }

        // 4. Simple notifications for post activity
        $notifications = [];
        $now = now();

        foreach ($postIds as $postId) {
            $creatorId = DB::table('posts')->where('id', $postId)->value('creator_id');
            if (! $creatorId) {
                continue;
            }

            $notifications[] = [
                'account_id' => $creatorId,
                'entity_id' => $postId,
                'type' => 'post_activity',
                'title' => 'Your post is getting attention',
                'body' => 'Demo data added comments, reactions and activity to your post.',
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if (! empty($notifications)) {
            DB::table('account_notifications')->insert($notifications);
        }

        // 5. Seed demo news feed items directly into the search index (Meilisearch)
        try {
            $newsItems = [];
            $sources = ['Demo News', 'Local Watch', 'Civic Monitor', 'Community Pulse'];
            $places = ['Lagos', 'Abuja', 'Ogun', 'Kano', 'Rivers', 'Enugu', 'Kaduna'];

            for ($i = 1; $i <= 120; $i++) {
                $newsItems[] = [
                    'report_id' => 'demo-' . $i,
                    'report_title' => $faker->sentence(8),
                    'report_summary' => $faker->paragraph(3),
                    'report_date_published' => $faker->dateTimeBetween('-30 days')->format('Y-m-d H:i:s'),
                    'place_geocode_name' => Arr::random($places),
                    'place_admin_level' => 'state',
                    'source_name' => Arr::random($sources),
                    'entity_value' => $faker->word(),
                ];
            }

            $sortableAttributes = [
                'report_date_published',
                'report_title',
                'place_geocode_name',
                'place_admin_level',
            ];

            $filterableAttributes = ['place_geocode_name', 'source_name', 'entity_value'];

            app('search')->indexData(
                indexName: 'news_feed',
                data: $newsItems,
                primaryKey: 'report_id',
                sortableAttributes: $sortableAttributes,
                filterableAttributes: $filterableAttributes,
            );
        } catch (\Throwable $e) {
            // If Meilisearch or the search engine is unavailable, do not fail the seeder.
            $this->command?->warn('Skipping demo news feed indexing: ' . $e->getMessage());
        }
    }
}




