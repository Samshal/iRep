<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ConstituencySeeder extends Seeder
{
    public function run()
    {
        $constituencies = [
            // Abia State
            ['name' => 'Aba North', 'state_id' => 1, 'code' => 'SC/01/AB01', 'type' => 'state'],
            ['name' => 'Aba South', 'state_id' => 1, 'code' => 'SC/01/AB02', 'type' => 'state'],
            ['name' => 'Aba Central', 'state_id' => 1, 'code' => 'SC/01/AB03', 'type' => 'state'],
            ['name' => 'Arochukwu', 'state_id' => 1, 'code' => 'SC/01/AB04', 'type' => 'state'],
            ['name' => 'Bende North', 'state_id' => 1, 'code' => 'SC/01/AB05', 'type' => 'state'],
            ['name' => 'Bende South', 'state_id' => 1, 'code' => 'SC/01/AB06', 'type' => 'state'],
            ['name' => 'Ikwuano', 'state_id' => 1, 'code' => 'SC/01/AB07', 'type' => 'state'],
            ['name' => 'Isiala Ngwa North', 'state_id' => 1, 'code' => 'SC/01/AB08', 'type' => 'state'],
            ['name' => 'Isiala Ngwa South', 'state_id' => 1, 'code' => 'SC/01/AB09', 'type' => 'state'],
            ['name' => 'Isuikwuato', 'state_id' => 1, 'code' => 'SC/01/AB10', 'type' => 'state'],
            ['name' => 'Obingwa East', 'state_id' => 1, 'code' => 'SC/01/AB11', 'type' => 'state'],
            ['name' => 'Obingwa West', 'state_id' => 1, 'code' => 'SC/01/AB12', 'type' => 'state'],
            ['name' => 'Ohafia North', 'state_id' => 1, 'code' => 'SC/01/AB13', 'type' => 'state'],
            ['name' => 'Ohafia South', 'state_id' => 1, 'code' => 'SC/01/AB14', 'type' => 'state'],
            ['name' => 'Osisioma North', 'state_id' => 1, 'code' => 'SC/01/AB15', 'type' => 'state'],
            ['name' => 'Osisioma South', 'state_id' => 1, 'code' => 'SC/01/AB16', 'type' => 'state'],
            ['name' => 'Umunneochi', 'state_id' => 1, 'code' => 'SC/01/AB17', 'type' => 'state'],
            ['name' => 'Ugwuna Agbo', 'state_id' => 1, 'code' => 'SC/01/AB18', 'type' => 'state'],
            ['name' => 'Ukwa East', 'state_id' => 1, 'code' => 'SC/01/AB19', 'type' => 'state'],
            ['name' => 'Ukwa West', 'state_id' => 1, 'code' => 'SC/01/AB20', 'type' => 'state'],
            ['name' => 'Umuahia East', 'state_id' => 1, 'code' => 'SC/01/AB21', 'type' => 'state'],
            ['name' => 'Umuahia West', 'state_id' => 1, 'code' => 'SC/01/AB22', 'type' => 'state'],
            ['name' => 'Umuahia Central', 'state_id' => 1, 'code' => 'SC/01/AB23', 'type' => 'state'],
            ['name' => 'Umuahia South', 'state_id' => 1, 'code' => 'SC/01/AB24', 'type' => 'state'],

            ['name' => 'Aba North/Aba South', 'state_id' => 1, 'code' => 'FC/001/AB', 'type' => 'federal'],
            ['name' => 'Arochukwu/Ohafia', 'state_id' => 1, 'code' => 'FC/002/AB', 'type' => 'federal'],
            ['name' => 'Bende', 'state_id' => 1, 'code' => 'FC/003/AB', 'type' => 'federal'],
            ['name' => 'Isiala Ngwa North/Isiala Ngwa South', 'state_id' => 1, 'code' => 'FC/004/AB', 'type' => 'federal'],
            ['name' => 'Isuikwuato/Umu-Nneochi', 'state_id' => 1, 'code' => 'FC/005/AB', 'type' => 'federal'],
            ['name' => 'Obingwa//Ugwunagbo/Osisioma', 'state_id' => 1, 'code' => 'FC/006/AB', 'type' => 'federal'],
            ['name' => 'Umuahia North/Umuahia South/Ikwuano', 'state_id' => 1, 'code' => 'FC/007/AB', 'type' => 'federal'],
            ['name' => 'Ukwa East/Ukwa West', 'state_id' => 1, 'code' => 'FC/008/AB', 'type' => 'federal'],

        ];

        foreach ($constituencies as $constituency) {
            try {
                DB::statement("
					INSERT INTO constituencies (name, code, type, state_id)
					VALUES (?, ?, ?, ?)
					ON DUPLICATE KEY UPDATE
						name = VALUES(name),
						code = VALUES(code),
						type = VALUES(type)
				", [
                    $constituency['name'],
                    $constituency['code'],
                    $constituency['type'],
                    $constituency['state_id']
                ]);

                Log::info('Inserted/Updated Constituency: ', $constituency);
            } catch (\Exception $e) {
                Log::error('Failed to insert/update constituency: ' . $e->getMessage(), $constituency);
            }
        }
    }
}
