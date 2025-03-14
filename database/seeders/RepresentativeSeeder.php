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
            // Ogun State
            ["Dapo Abiodun", "Ogun", "Ogun Central", "APC", "dapo.abiodun@ogunstate.gov.ng", "08012345678", "Governor", "Abeokuta North"],
            ["Noimot Salako-Oyedele", "Ogun", "Ogun Central", "APC", "noimot.salako@ogunstate.gov.ng", "08012345679", "Deputy Governor", "Abeokuta North"],
            ["Shuaibu Salisu", "Ogun", "Ogun Central", "APC", "shuaibu.salisu@nass.gov.ng", "08012345684", "Senator", "Abeokuta South"],
            ["Gbenga Daniel", "Ogun", "Ogun East", "APC", "gbenga.daniel@nass.gov.ng", "08012345685", "Senator", "Sagamu"],
            ["Solomon Olamilekan Adeola", "Ogun", "Ogun West", "APC", "solomon.adeola@nass.gov.ng", "08012345686", "Senator", "Ifo"],
            ["Oludaisi Olusegun Elemide", "Ogun", "Ogun Central", "APC", "oludaisi.elemide@ogha.og.gov.ng", "08012345680", "State House of Assembly Speaker", "Odeda"],
            ["Yusuf Sherif Abiodun", "Ogun", "Ogun West", "APC", "yusuf.abiodun@ogha.og.gov.ng", "08012345687", "State House of Assembly Member", "Ado-Odo/Ota"],
            ["Mosunmola Arinola Dipeolu", "Ogun", "Ogun Central", "N/A", "chiefjudge@ogunstate.gov.ng", "08012345681", "Chief Judge of the State", "Abeokuta North"],
            ["Dapo Okubadejo", "Ogun", "Ogun Central", "APC", "dapo.okubadejo@ogunstate.gov.ng", "08012345688", "Commissioner", "Abeokuta North"],
            ["Gbolahan Adeniran", "Ogun", "Ogun Central", "APC", "gbolahan.adeniran@ogunstate.gov.ng", "08012345682", "Attorney General (State)", "Abeokuta North"],
            ["Tokunbo Talabi", "Ogun", "Ogun Central", "APC", "tokunbo.talabi@ogunstate.gov.ng", "08012345683", "State Secretary to the Government", "Abeokuta North"],
            ["Adebayo Fari", "Ogun", "Ogun Central", "APC", "adebayo.fari@ogunstate.gov.ng", "08012345689", "Political Party Chairman (State)", "Abeokuta South"],
            ["Oluwatoyin Taiwo", "Ogun", "Ogun Central", "APC", "oluwatoyin.taiwo@ogunstate.gov.ng", "08012345690", "Special Adviser to the Governor", "Abeokuta North"],
            ["Sheriff Musa", "Ogun", "Ogun Central", "APC", "sheriff.musa@abeokutasouth.gov.ng", "08012345691", "Chairman (LGA)", "Abeokuta South"],
            ["Folakemi Ogunsola", "Ogun", "Ogun Central", "APC", "folakemi.ogunsola@abeokutasouth.gov.ng", "08012345692", "Vice Chairman (LGA)", "Abeokuta South"],
            ["Adekunle Adeyemi", "Ogun", "Ogun Central", "APC", "adekunle.adeyemi@abeokutasouth.gov.ng", "08012345693", "Local Government Secretary", "Abeokuta South"],
            ["Tunde Tella", "Ogun", "Ogun Central", "APC", "tunde.tella@abeokutasouth.gov.ng", "08012345694", "Supervisor (LGA)", "Abeokuta South"],
            ["Rasheed Adegbenro", "Ogun", "Ogun Central", "APC", "rasheed.adegbenro@abeokutasouth.gov.ng", "08012345695", "Head of Local Government Administration (HLGA)", "Abeokuta South"],
            ["Kehinde Adeyemi", "Ogun", "Ogun Central", "APC", "kehinde.adeyemi@abeokutasouth.gov.ng", "08012345696", "Special Adviser to the Chairman", "Abeokuta South"],
            ["Babatunde Olaotan", "Ogun", "Ogun Central", "APC", "babatunde.olaotan@abeokutasouth.gov.ng", "08012345697", "Councillor", "Abeokuta South"],
            ["Segun Adewale", "Ogun", "Ogun Central", "APC", "segun.adewale@apcogun.org", "08012345698", "Ward Leader", "Abeokuta South"],
            ["Kazeem Olalekan", "Ogun", "Ogun Central", "APC", "kazeem.olalekan@apcogun.org", "08012345699", "Party Ward Chairman", "Abeokuta South"],

            // Lagos State
            ["Babajide Sanwo-Olu", "Lagos", "Lagos West", "APC", "babajide.sanwoolu@lagosstate.gov.ng", "08012345700", "Governor", "Ikeja"],
            ["Femi Hamzat", "Lagos", "Lagos West", "APC", "femi.hamzat@lagosstate.gov.ng", "08012345701", "Deputy Governor", "Ikeja"],
            ["Wasiu Eshinlokun-Sanni", "Lagos", "Lagos Central", "APC", "wasiu.eshinlokun@nass.gov.ng", "08012345702", "Senator", "Lagos Mainland"],
            ["Idiat Adebule", "Lagos", "Lagos West", "APC", "idiat.adebule@nass.gov.ng", "08012345703", "Senator", "Amuwo-Odofin"],
            ["Tokunbo Abiru", "Lagos", "Lagos East", "APC", "tokunbo.abiru@nass.gov.ng", "08012345704", "Senator", "Ikorodu"],
            ["Mudashiru Obasa", "Lagos", "Lagos West", "APC", "mudashiru.obasa@lagoshouseofassembly.gov.ng", "08012345705", "State House of Assembly Speaker", "Agege"],
            ["Wasiu Eshinlokun", "Lagos", "Lagos Central", "APC", "wasiu.eshinlokun@lagoshouseofassembly.gov.ng", "08012345706", "State House of Assembly Member", "Lagos Island"],
            ["Folajimi Lai Mohammed", "Lagos", "Lagos West", "N/A", "chiefjudge@lagosstate.gov.ng", "08012345707", "Chief Judge of the State", "Ikeja"],
            ["Gbenga Omotoso", "Lagos", "Lagos West", "APC", "gbenga.omotoso@lagosstate.gov.ng", "08012345708", "Commissioner", "Ikeja"],
            ["Moyosore Onigbanjo", "Lagos", "Lagos West", "APC", "moyosore.onigbanjo@lagosstate.gov.ng", "08012345709", "Attorney General (State)", "Ikeja"],
            ["Wale Ahmed", "Lagos", "Lagos West", "APC", "wale.ahmed@lagosstate.gov.ng", "08012345710", "State Secretary to the Government", "Ikeja"],
            ["Bola Ilori", "Lagos", "Lagos West", "APC", "bola.ilori@apclagos.org", "08012345711", "Political Party Chairman (State)", "Ikeja"],
            ["Joe Igbokwe", "Lagos", "Lagos West", "APC", "joe.igbokwe@lagosstate.gov.ng", "08012345712", "Special Adviser to the Governor", "Ikeja"],
            ["David Doherty", "Lagos", "Lagos East", "APC", "david.doherty@etiosa.gov.ng", "08012345713", "Chairman (LGA)", "Eti-Osa"],
            ["Funke Akindele", "Lagos", "Lagos East", "APC", "funke.akindele@etiosa.gov.ng", "08012345714", "Vice Chairman (LGA)", "Eti-Osa"],
            ["Tunde Bakare", "Lagos", "Lagos East", "APC", "tunde.bakare@etiosa.gov.ng", "08012345715", "Local Government Secretary", "Eti-Osa"],
            ["Lekan Balogun", "Lagos", "Lagos East", "APC", "lekan.balogun@etiosa.gov.ng", "08012345716", "Supervisor (LGA)", "Eti-Osa"],
            ["Shade Tinubu", "Lagos", "Lagos East", "APC", "shade.tinubu@etiosa.gov.ng", "08012345717", "Head of Local Government Administration (HLGA)", "Eti-Osa"],
            ["Kemi Adeosun", "Lagos", "Lagos East", "APC", "kemi.adeosun@etiosa.gov.ng", "08012345718", "Special Adviser to the Chairman", "Eti-Osa"],
            ["Segun Agbaje", "Lagos", "Lagos East", "APC", "segun.agbaje@etiosa.gov.ng", "08012345719", "Councillor", "Eti-Osa"],
            ["Tola Banjo", "Lagos", "Lagos East", "APC", "tola.banjo@apclagos.org", "08012345720", "Ward Leader", "Eti-Osa"],
            ["Yemi Osinbajo", "Lagos", "Lagos East", "APC", "yemi.osinbajo@apclagos.org", "08012345721", "Party Ward Chairman", "Eti-Osa"],

            // Kano State
            ["Abba Kabir Yusuf", "Kano", "Kano Central", "NNPP", "abba.yusuf@kanostate.gov.ng", "08012345722", "Governor", "Kano Municipal"],
            ["Aminu Abdussalam", "Kano", "Kano Central", "NNPP", "aminu.abdussalam@kanostate.gov.ng", "08012345723", "Deputy Governor", "Kano Municipal"],
            ["Barau Jibrin", "Kano", "Kano North", "APC", "barau.jibrin@nass.gov.ng", "08012345724", "Senator", "Kabo"],
            ["Kabiru Ibrahim Gaya", "Kano", "Kano South", "APC", "kabiru.gaya@nass.gov.ng", "08012345725", "Senator", "Gaya"],
            ["Ibrahim Shekarau", "Kano", "Kano Central", "NNPP", "ibrahim.shekarau@nass.gov.ng", "08012345726", "Senator", "Fagge"],
            ["Lawan Hussain", "Kano", "Kano South", "NNPP", "lawan.hussain@kanoassembly.gov.ng", "08012345727", "State House of Assembly Speaker", "Rogo"],
            ["Yusuf Falgore", "Kano", "Kano Central", "NNPP", "yusuf.falgore@kanoassembly.gov.ng", "08012345728", "State House of Assembly Member", "Fagge"],
            ["Fatima Adamu", "Kano", "Kano Central", "N/A", "chiefjudge@kanostate.gov.ng", "08012345729", "Chief Judge of the State", "Kano Municipal"],
            ["Haruna Dederi", "Kano", "Kano Central", "NNPP", "haruna.dederi@kanostate.gov.ng", "08012345730", "Commissioner", "Kano Municipal"],
            ["Umar Saidu", "Kano", "Kano Central", "NNPP", "umar.saidu@kanostate.gov.ng", "08012345731", "Attorney General (State)", "Kano Municipal"],
            ["Ibrahim Mukhtar", "Kano", "Kano Central", "NNPP", "ibrahim.mukhtar@kanostate.gov.ng", "08012345732", "State Secretary to the Government", "Kano Municipal"],
            ["Salisu Yahya", "Kano", "Kano Central", "NNPP", "salisu.yahya@nnppkano.org", "08012345733", "Political Party Chairman (State)", "Kano Municipal"],
            ["Kabiru Ado", "Kano", "Kano Central", "NNPP", "kabiru.ado@kanostate.gov.ng", "08012345734", "Special Adviser to the Governor", "Kano Municipal"],
            ["Sani Mai Nagge", "Kano", "Kano Central", "NNPP", "sani.nagge@gwale.gov.ng", "08012345735", "Chairman (LGA)", "Gwale"],
            ["Aisha Suleiman", "Kano", "Kano Central", "NNPP", "aisha.suleiman@gwale.gov.ng", "08012345736", "Vice Chairman (LGA)", "Gwale"],
            ["Musa Abdullahi", "Kano", "Kano Central", "NNPP", "musa.abdullahi@gwale.gov.ng", "08012345737", "Local Government Secretary", "Gwale"],
            ["Bello Sani", "Kano", "Kano Central", "NNPP", "bello.sani@gwale.gov.ng", "08012345738", "Supervisor (LGA)", "Gwale"],
            ["Hafsat Idris", "Kano", "Kano Central", "NNPP", "hafsat.idris@gwale.gov.ng", "08012345739", "Head of Local Government Administration (HLGA)", "Gwale"],
            ["Yakubu Garba", "Kano", "Kano Central", "NNPP", "yakubu.garba@gwale.gov.ng", "08012345740", "Special Adviser to the Chairman", "Gwale"],
            ["Ibrahim Khalil", "Kano", "Kano Central", "NNPP", "ibrahim.khalil@gwale.gov.ng", "08012345741", "Councillor", "Gwale"],
            ["Sani Usman", "Kano", "Kano Central", "NNPP", "sani.usman@nnppkano.org", "08012345742", "Ward Leader", "Gwale"],
            ["Aminu Garba", "Kano", "Kano Central", "NNPP", "aminu.garba@nnppkano.org", "08012345743", "Party Ward Chairman", "Gwale"]
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
        $local_government = trim($data[7] ?? '');

        $phone_number = ($phone_number === 'N/A' || empty($phone_number)) ? null : $phone_number;

        if (empty($name)) {
            return;
        }

        if (empty($email)) {
            $email = Str::random(10) . '@example.com';
        }

        try {
            // Fetch related IDs
            $position_id = DB::table('positions')->where('title', $position)->value('id');
            $party_id = DB::table('parties')->where('code', $party)->value('id');
            $state_id = DB::table('states')->where('name', $state)->value('id');
            $district_id = DB::table('districts')->where('name', $district)->value('id');
            $local_government_id = DB::table('local_governments')->where('name', $local_government)->value('id');

            // Check if account exists by email and update or insert
            $existingAccount = DB::table('accounts')->where('email', $email)->first();
            $accountData = [
                'photo_url' => "https://i.imgur.com/0GY9tnz.jpeg",
                'name' => $name,
                'email' => $email,
                'phone_number' => $phone_number,
                'dob' => null,
                'state_id' => $state_id ?? null,
                'local_government_id' => $local_government_id ?? null,
                'polling_unit' => null,
                'password' => Hash::make('password456'),
                'email_verified' => true,
                'account_type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            if ($existingAccount) {
                // Update existing account
                DB::table('accounts')
                    ->where('id', $existingAccount->id)
                    ->update([
                        'photo_url' => $accountData['photo_url'],
                        'name' => $accountData['name'],
                        'phone_number' => $accountData['phone_number'],
                        'state_id' => $accountData['state_id'],
                        'local_government_id' => $accountData['local_government_id'],
                        'updated_at' => now(),
                    ]);
                $account_id = $existingAccount->id;
            } else {
                // Insert new account
                $account_id = DB::table('accounts')->insertGetId($accountData);
            }

            // Check if representative exists and update or insert
            $existingRepresentative = DB::table('representatives')
                ->where('account_id', $account_id)
                ->where('position_id', $position_id)
                ->first();

            $representativeData = [
                'position_id' => $position_id ?? null,
                'constituency_id' => $constituency_id ?? null, // Assuming this is defined elsewhere or null
                'district_id' => $district_id ?? null,
                'party_id' => $party_id ?? null,
                'bio' => $name . ' is a representative from ' . $district,
                'account_id' => $account_id,
            ];

            if ($existingRepresentative) {
                // Update existing representative
                DB::table('representatives')
                    ->where('account_id', $account_id)
                    ->where('position_id', $position_id)
                    ->update([
                        'district_id' => $representativeData['district_id'],
                        'party_id' => $representativeData['party_id'],
                        'bio' => $representativeData['bio'],
                    ]);
            } else {
                // Insert new representative
                DB::table('representatives')->insert($representativeData);
            }
        } catch (\Exception $e) {
            Log::error('Failed to insert or update representative: ' . $e->getMessage(), ['row' => $data]);
        }
    }
}
