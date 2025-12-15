<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DemoEngagementSeeder extends Seeder
{
    /**
     * Seed petition signatures and eyewitness approvals for existing posts.
     *
     * This seeder is designed to be safely re-runnable:
     * - uses insertOrIgnore for unique (post_id, account_id) constraints
     * - recomputes signatures / approvals counts from the join tables
     */
    public function run(): void
    {
        $this->command?->info('Seeding demo petition signatures and eyewitness approvals...');

        $accountIds = DB::table('accounts')->pluck('id')->all();

        if (empty($accountIds)) {
            $this->command?->warn('No accounts found, skipping engagement seeding.');
            return;
        }

        $this->seedPetitionSignatures($accountIds);
        $this->seedEyewitnessApprovals($accountIds);
    }

    protected function seedPetitionSignatures(array $accountIds): void
    {
        $petitions = DB::table('petitions')->get();

        foreach ($petitions as $petition) {
            // Choose a random number of signees per petition
            $desiredSignatures = min(
                max(10, (int) floor(($petition->target_signatures ?? 100) * 0.4)),
                count($accountIds)
            );

            $signees = Arr::random($accountIds, $desiredSignatures);

            foreach ((array) $signees as $accountId) {
                DB::table('petition_signatures')->insertOrIgnore([
                    'post_id' => $petition->post_id,
                    'account_id' => $accountId,
                ]);
            }

            // Recompute signatures count from the join table
            $count = DB::table('petition_signatures')
                ->where('post_id', $petition->post_id)
                ->count();

            DB::table('petitions')
                ->where('id', $petition->id)
                ->update(['signatures' => $count]);
        }
    }

    protected function seedEyewitnessApprovals(array $accountIds): void
    {
        $reports = DB::table('eye_witness_reports')->get();

        foreach ($reports as $report) {
            // Random number of approvers per eyewitness report
            $desiredApprovals = min(
                max(5, (int) floor(0.2 * count($accountIds))),
                count($accountIds)
            );

            $approvers = Arr::random($accountIds, $desiredApprovals);

            foreach ((array) $approvers as $accountId) {
                DB::table('eye_witness_reports_approvals')->insertOrIgnore([
                    'post_id' => $report->post_id,
                    'account_id' => $accountId,
                ]);
            }

            // Recompute approvals count from the join table
            $count = DB::table('eye_witness_reports_approvals')
                ->where('post_id', $report->post_id)
                ->count();

            DB::table('eye_witness_reports')
                ->where('id', $report->id)
                ->update(['approvals' => $count]);
        }
    }
}




