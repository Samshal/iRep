<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $positionsData = [
            // Federal Level Positions
            ['title' => 'President', 'level' => 1],
            ['title' => 'Vice President', 'level' => 1],
            ['title' => 'Senate President', 'level' => 1],
            ['title' => 'Speaker of the House of Representatives', 'level' => 1],
            ['title' => 'Chief Justice of Nigeria', 'level' => 1],
            ['title' => 'Minister', 'level' => 1],
            ['title' => 'House of Representatives Member', 'level' => 1],
            ['title' => 'Attorney General of the Federation', 'level' => 1],
            ['title' => 'Secretary to the Government of the Federation', 'level' => 1],
            ['title' => 'National Chairman (Party)', 'level' => 1],

            // State Level Positions
            ['title' => 'Governor', 'level' => 2],
            ['title' => 'Deputy Governor', 'level' => 2],
            ['title' => 'Senator', 'level' => 2],
            ['title' => 'State House of Assembly Speaker', 'level' => 2],
            ['title' => 'State House of Assembly Member', 'level' => 2],
            ['title' => 'Chief Judge of the State', 'level' => 2],
            ['title' => 'Commissioner', 'level' => 2],
            ['title' => 'Attorney General (State)', 'level' => 2],
            ['title' => 'State Secretary to the Government', 'level' => 2],
            ['title' => 'Political Party Chairman (State)', 'level' => 2],
            ['title' => 'Special Adviser to the Governor', 'level' => 2],

            // Local Government Level Positions
            ['title' => 'Chairman (LGA)', 'level' => 3],
            ['title' => 'Vice Chairman (LGA)', 'level' => 3],
            ['title' => 'Local Government Secretary', 'level' => 3],
            ['title' => 'Supervisor (LGA)', 'level' => 3],
            ['title' => 'Head of Local Government Administration (HLGA)', 'level' => 3],
            ['title' => 'Special Adviser to the Chairman', 'level' => 3],

            // Constituency Level Positions
            ['title' => 'Councillor', 'level' => 4],
            ['title' => 'Ward Leader', 'level' => 4],
            ['title' => 'Party Ward Chairman', 'level' => 4],
        ];

        foreach ($positionsData as $position) {
            try {
                DB::table('positions')->insert($position);
            } catch (\Exception $e) {
                Log::error('Failed to insert position data: ' . $e->getMessage());
            }
        }
    }
}
