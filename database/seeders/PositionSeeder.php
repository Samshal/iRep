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
            // Federal Positions
            ['title' => 'President', 'level' => 1],
            ['title' => 'Vice President', 'level' => 1],
            ['title' => 'Minister', 'level' => 3],
            ['title' => 'Senator', 'level' => 3],
            ['title' => 'House of Representatives Member', 'level' => 4],

            // State Positions
            ['title' => 'Governor', 'level' => 2],
            ['title' => 'Deputy Governor', 'level' => 2],
            ['title' => 'State House of Assembly Member', 'level' => 4],

            // Local Government Positions
            ['title' => 'Chairman (LGA)', 'level' => 3],
            ['title' => 'Vice Chairman (LGA)', 'level' => 3],
            ['title' => 'Councillor', 'level' => 4],

            // Other Positions
            ['title' => 'Special Adviser', 'level' => 3],
            ['title' => 'Local Government Secretary', 'level' => 3],
            ['title' => 'Political Party Chairman', 'level' => 2],
            ['title' => 'National Chairman (Party)', 'level' => 1],
            ['title' => 'Secretary to the Government', 'level' => 2],
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
