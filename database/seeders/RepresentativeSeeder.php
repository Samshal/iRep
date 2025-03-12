<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RepresentativeSeeder extends Seeder
{
    public function run()
    {
        $filePath = storage_path('app/lawmakers.xlsx');

        // Load data from the spreadsheet
        $data = Excel::toCollection(null, $filePath)->first();

        // Process spreadsheet data
        foreach ($data as $index => $row) {
            if ($index === 0) {
                continue;
            }

            $this->insertRepresentativeData($row);
        }

        // Additional hardcoded seed data
        $hardcodedRepresentatives = [
            // Governor
            [
                'Dapo Abiodun', 'Ogun', 'Abeokuta', 'APC',
                'dapo.abiodun@example.com', '08011112222', 'Governor',
            ],

            // Deputy Governor
            [
                'Noimot Salako-Oyedele', 'Ogun', 'Abeokuta', 'APC',
                'noimot.salako@example.com', '08022223333', 'Deputy Governor',
            ],

            // Senators (Ogun has 3 Senatorial Districts)
            [
                'Solomon Adeola', 'Ogun', 'Ogun West', 'APC',
                'solomon.adeola@example.com', '08033334444', 'Senator',
            ],
            [
                'Shuaib Afolabi Salisu', 'Ogun', 'Ogun Central', 'APC',
                'shuaib.salisu@example.com', '08044445555', 'Senator',
            ],
            [
                'Gbenga Daniel', 'Ogun', 'Ogun East', 'APC',
                'gbenga.daniel@example.com', '08055556666', 'Senator',
            ],

            // State House of Assembly Speaker
            [
                'Taiwo Oluomo', 'Ogun', 'Abeokuta', 'APC',
                'taiwo.oluomo@example.com', '08066667777', 'State House of Assembly Speaker',
            ],

            // Ogun State House of Assembly Members (26 Constituencies)
            [
                'Olakunle Sobukanla', 'Ogun', 'Ifo I', 'APC',
                'olakunle.sobukanla@example.com', '08077778888', 'State House of Assembly Member',
            ],
            [
                'Yusuf Amosun', 'Ogun', 'Abeokuta South I', 'APC',
                'yusuf.amosun@example.com', '08088889999', 'State House of Assembly Member',
            ],
            [
                'Modupe Mujota', 'Ogun', 'Abeokuta North', 'APC',
                'modupe.mujota@example.com', '08099990000', 'State House of Assembly Member',
            ],

            // Chief Judge of the State
            [
                'Mosunmola Dipeolu', 'Ogun', 'Abeokuta', 'Non-Partisan',
                'mosunmola.dipeolu@example.com', '08010101010', 'Chief Judge of the State',
            ],

            // Commissioners
            [
                'Tunji Akinosi', 'Ogun', 'Abeokuta', 'APC',
                'tunji.akinosi@example.com', '08020202020', 'Commissioner',
            ],
            [
                'Funmi Efuwape', 'Ogun', 'Abeokuta', 'APC',
                'funmi.efuwape@example.com', '08030303030', 'Commissioner',
            ],

            // Attorney General (State)
            [
                'Akingbolahan Adeniran', 'Ogun', 'Abeokuta', 'APC',
                'akingbolahan.adeniran@example.com', '08040404040', 'Attorney General (State)',
            ],

            // State Secretary to the Government
            [
                'Tokunbo Talabi', 'Ogun', 'Abeokuta', 'APC',
                'tokunbo.talabi@example.com', '08050505050', 'State Secretary to the Government',
            ],

            // Political Party Chairman (State)
            [
                'Yemi Sanusi', 'Ogun', 'Abeokuta', 'APC',
                'yemi.sanusi@example.com', '08060606060', 'Political Party Chairman (State)',
            ],

            // Special Advisers to the Governor
            [
                'Remmy Hazzan', 'Ogun', 'Abeokuta', 'APC',
                'remmy.hazzan@example.com', '08070707070', 'Special Adviser to the Governor',
            ],
            [
                'Abayomi Arigbabu', 'Ogun', 'Ijebu-Ode', 'APC',
                'abayomi.arigbabu@example.com', '08080808080', 'Special Adviser to the Governor',
            ],

            // Local Government Chairmen (20 LGAs)
            [
                'Omolaja Majekodunmi', 'Ogun', 'Abeokuta South', 'APC',
                'omolaja.majekodunmi@example.com', '08090909090', 'Chairman (LGA)',
            ],
            [
                'Adeleke Adewolu', 'Ogun', 'Ijebu-Ode', 'APC',
                'adeleke.adewolu@example.com', '08011112233', 'Chairman (LGA)',
            ],

            // Vice Chairmen (LGA)
            [
                'Akinlade Adedayo', 'Ogun', 'Abeokuta South', 'APC',
                'akinlade.adedayo@example.com', '08022223344', 'Vice Chairman (LGA)',
            ],

            // Local Government Secretaries
            [
                'Olajide Ogunyemi', 'Ogun', 'Abeokuta South', 'APC',
                'olajide.ogunyemi@example.com', '08033334455', 'Local Government Secretary',
            ],

            // Councillors (236 Wards in Ogun State)
            [
                'Idris Sanni', 'Ogun', 'Abeokuta South Ward 1', 'APC',
                'idris.sanni@example.com', '08044445566', 'Councillor',
            ],
            [
                'Abiola Odebiyi', 'Ogun', 'Sagamu Ward 3', 'APC',
                'abiola.odebiyi@example.com', '08055556677', 'Councillor',
            ],

            // Ward Leaders
            [
                'Kunle Owolabi', 'Ogun', 'Abeokuta South Ward 1', 'APC',
                'kunle.owolabi@example.com', '08066667788', 'Ward Leader',
            ],
            [
                'Oluwatobi Olatunde', 'Ogun', 'Ijebu-Ode Ward 5', 'APC',
                'oluwatobi.olatunde@example.com', '08077778899', 'Ward Leader',
            ],

            // Party Ward Chairmen
            [
                'Tunde Shodipo', 'Ogun', 'Abeokuta South Ward 1', 'APC',
                'tunde.shodipo@example.com', '08088889900', 'Party Ward Chairman',
            ],
            [
                'Adewale Ogunleye', 'Ogun', 'Ijebu-Ode Ward 4', 'APC',
                'adewale.ogunleye@example.com', '08099990011', 'Party Ward Chairman',
            ],
        ];

        foreach ($hardcodedRepresentatives as $representative) {
            $this->insertRepresentativeData($representative);
        }
    }

    // Method to insert representative data
    private function insertRepresentativeData($data)
    {
        $name = trim($data[0] ?? '');
        $state = trim($data[1] ?? '');
        $district = trim($data[2] ?? '');
        $party = trim($data[3] ?? '');
        $email = trim($data[4] ?? '');
        $phone_number = trim($data[5] ?? '');
        $position = trim($data[6] ?? '');

        $phone_number = ($phone_number === 'N/A' || empty($phone_number)) ? null : $phone_number;

        if (empty($name)) {
            return;
        }

        if (empty($email)) {
            $email = Str::random(10) . '@example.com';
        } elseif (DB::table('accounts')->where('email', $email)->exists()) {
            return;
        }

        try {
            $position_id = DB::table('positions')->where('title', $position)->value('id');
            $party_id = DB::table('parties')->where('code', $party)->value('id');
            $state_id = DB::table('states')->where('name', $state)->value('id');
            $district_id = DB::table('districts')->where('name', $district)->value('id');

            // Insert account data
            $account_id = DB::table('accounts')->insertGetId([
                'photo_url' => "https://i.imgur.com/0GY9tnz.jpeg",
                'name' => $name,
                'email' => $email,
                'phone_number' => $phone_number,
                'dob' => null,
                'state_id' => $state_id ?? null,
                'local_government_id' => null,
                'polling_unit' => null,
                'password' => Hash::make('password456'),
                'email_verified' => true,
                'account_type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert representative data
            DB::table('representatives')->insert([
                'position_id' => $position_id ?? null,
                'constituency_id' => $constituency_id ?? null,
                'district_id' => $district_id ?? null,
                'party_id' => $party_id ?? null,
                'bio' => $name . ' is a representative from ' . $district,
                'account_id' => $account_id,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to insert representative: ' . $e->getMessage(), ['row' => $data]);
        }
    }
}
