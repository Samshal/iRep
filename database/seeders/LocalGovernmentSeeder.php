<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LocalGovernmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Abia state local governments
        $localGovernments = [
            [
                'name' => 'Aba North',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Aba North/Aba South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia South')
                    ->value('id')
            ],
            [
                'name' => 'Aba South',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Aba North/Aba South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia South')
                    ->value('id')
            ],
            [
                'name' => 'Arochukwu',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Arochukwu/Ohafia')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia North')
                    ->value('id')
            ],
            [
                'name' => 'Bende',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Bende')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia North')
                    ->value('id')
            ],
            [
                'name' => 'Ikwuano',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ikwuano/Umuahia North/Umuahia South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia Central')
                    ->value('id')
            ],
            [
                'name' => 'Umuahia North',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ikwuano/Umuahia North/Umuahia South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia Central')
                    ->value('id')
            ],
            [
                'name' => 'Umuahia South',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ikwuano/Umuahia North/Umuahia South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia Central')
                    ->value('id')
            ],
            [
                'name' => 'Isiala-Ngwa North',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Isiala Ngwa North/Isiala Ngwa South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia Central')
                    ->value('id')
            ],
            [
                'name' => 'Isiala-Ngwa South',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Isiala Ngwa North/Isiala Ngwa South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia Central')
                    ->value('id')
            ],
            [
                'name' => 'Isuikwuato',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Isuikwuato/Umunneochi')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia North')
                    ->value('id')
            ],
            [
                'name' => 'Umu Nneochi',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Isuikwuato/Umunneochi')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia North')
                    ->value('id')
            ],
            [
                'name' => 'Obi Ngwa',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Obingwa/Osisioma/Ugwunagbo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia South')
                    ->value('id')
            ],
            [
                'name' => 'Osisioma',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Obingwa/Osisioma/Ugwunagbo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia South')
                    ->value('id')
            ],
            [
                'name' => 'Ugwunagbo',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Obingwa/Osisioma/Ugwunagbo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia South')
                    ->value('id')
            ],
            [
                'name' => 'Ukwa East',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ukwa East/Ukwa West')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia South')
                    ->value('id')
            ],
            [
                'name' => 'Ukwa West',
                'state_id' => 1,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ukwa East/Ukwa West')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Abia South')
                    ->value('id')
            ],

            // Adamawa
            [
                'name' => 'Demsa',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Numan/Demsa/Lamurde')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa South')
                    ->value('id'),
            ],
            [
                'name' => 'Fufore',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Fufore/Song')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa Central')
                    ->value('id'),
            ],
            [
                'name' => 'Ganye',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ganye/Jada/Mayo-Belwa/Toungo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa South')
                    ->value('id'),
            ],
            [
                'name' => 'Girei',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Yola North/Yola South/Girei')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa Central')
                    ->value('id'),
            ],
            [
                'name' => 'Gombi',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Gombi/Hong')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa North')
                    ->value('id'),
            ],
            [
                'name' => 'Guyuk',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Shelleng/Guyuk')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa South')
                    ->value('id'),
            ],
            [
                'name' => 'Hong',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Gombi/Hong')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa North')
                    ->value('id'),
            ],
            [
                'name' => 'Jada',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ganye/Jada/Mayo-Belwa/Toungo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa South')
                    ->value('id'),
            ],
            [
                'name' => 'Madagali',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Madagali/Michika')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa North')
                    ->value('id'),
            ],
            [
                'name' => 'Mubi-North',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Mubi North/Mubi South/Maiha')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa North')
                    ->value('id'),
            ],
            [
                'name' => 'Yola North',
                'state_id' => 2,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Yola North/Yola South/Girei')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Adamawa Central')
                    ->value('id'),
            ],

            // Akwa Ibom state
            [
                'name' => 'Abak',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Abak/Etim Ekpo/Ika')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom North West')
                    ->value('id'),
            ],
            [
                'name' => 'Eastern-Obolo',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ikot Abasi/Mkpat Enin/Eastern Obolo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom South')
                    ->value('id'),
            ],
            [
                'name' => 'Eket',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Eket/Esit Eket/Ibeno/Onna')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom South')
                    ->value('id'),
            ],
            [
                'name' => 'Esit-Eket',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Eket/Esit Eket/Ibeno/Onna')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom South')
                    ->value('id'),
            ],
            [
                'name' => 'Essien-Udim',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ikot Ekpene/Essien Udim/Obot Akara')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom North West')
                    ->value('id'),
            ],
            [
                'name' => 'Etim-Ekpo',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Abak/Etim Ekpo/Ika')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom North West')
                    ->value('id'),
            ],
            [
                'name' => 'Etinan',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Etinan/Nsit Ibom/Nsit Ubium')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom North East')
                    ->value('id'),
            ],
            [
                'name' => 'Ibeno',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Eket/Esit Eket/Ibeno/Onna')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom South')
                    ->value('id'),
            ],
            [
                'name' => 'Ibesikpo-Asutan',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Uyo/Uruan/Nsit Atai/Ibesikpo Asutan')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom North East')
                    ->value('id'),
            ],
            [
                'name' => 'Ibiono-Ibom',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ini/Ibiono Ibom')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom North East')
                    ->value('id'),
            ],
            [
                'name' => 'Ikot-Abasi',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ikot Abasi/Mkpat Enin/Eastern Obolo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom South')
                    ->value('id'),
            ],
            [
                'name' => 'Ikot-Ekpene',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ikot Ekpene/Essien Udim/Obot Akara')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom North West')
                    ->value('id'),
            ],
            [
                'name' => 'Uyo',
                'state_id' => 3,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Uyo/Uruan/Nsit Atai/Ibesikpo Asutan')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Akwa Ibom North East')
                    ->value('id'),
            ],

            // Anambra state
            [
                'name' => 'Aguata',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Aguata')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra South')
                    ->value('id'),
            ],
            [
                'name' => 'Anambra East',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Anambra East/Anambra West')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra North')
                    ->value('id'),
            ],
            [
                'name' => 'Anambra West',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Anambra East/Anambra West')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra North')
                    ->value('id'),
            ],
            [
                'name' => 'Anaocha',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Anaocha/Njikoka/Dunukofia')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra Central')
                    ->value('id'),
            ],
            [
                'name' => 'Awka North',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Awka North/Awka South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra Central')
                    ->value('id'),
            ],
            [
                'name' => 'Awka South',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Awka North/Awka South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra Central')
                    ->value('id'),
            ],
            [
                'name' => 'Ayamelum',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Oyi/Ayamelum')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra North')
                    ->value('id'),
            ],
            [
                'name' => 'Dunukofia',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Anaocha/Njikoka/Dunukofia')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra Central')
                    ->value('id'),
            ],
            [
                'name' => 'Ekwusigo',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Nnewi North/South/Ekwusigo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra South')
                    ->value('id'),
            ],
            [
                'name' => 'Idemili-North',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Idemili North/Idemili South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra Central')
                    ->value('id'),
            ],
            [
                'name' => 'Idemili-South',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Idemili North/Idemili South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra Central')
                    ->value('id'),
            ],
            [
                'name' => 'Ihiala',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ihiala I/II')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra South')
                    ->value('id'),
            ],
            [
                'name' => 'Njikoka',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Anaocha/Njikoka/Dunukofia')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra Central')
                    ->value('id'),
            ],
            [
                'name' => 'Nnewi-North',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Nnewi North/South/Ekwusigo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra South')
                    ->value('id'),
            ],
            [
                'name' => 'Nnewi-South',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Nnewi North/South/Ekwusigo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra South')
                    ->value('id'),
            ],
            [
                'name' => 'Ogbaru',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ogbaru I/II')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra North')
                    ->value('id'),
            ],
            [
                'name' => 'Onitsha-North',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Onitsha North/South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra North')
                    ->value('id'),
            ],
            [
                'name' => 'Onitsha-South',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Onitsha North/Onitsha South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra North')
                    ->value('id'),
            ],
            [
                'name' => 'Orumba-North',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Orumba North/Orumba South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra South')
                    ->value('id'),
            ],
            [
                'name' => 'Orumba-South',
                'state_id' => 4,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Orumba North/Orumba South')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Anambra South')
                    ->value('id'),
            ],


            // Bauchi state
            [
                'name' => 'Alkaleri',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Alkaleri/Kirfi')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi South')
                    ->value('id'),
            ],
            [
                'name' => 'Bauchi',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Bauchi')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi South')
                    ->value('id'),
            ],
            [
                'name' => 'Bogoro',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Bogoro/Dass/Tafawa-Balewa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi South')
                    ->value('id'),
            ],
            [
                'name' => 'Damban',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Damban/Misau')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi Central')
                    ->value('id'),
            ],
            [
                'name' => 'Darazo',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Darazo/Ganjuwa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi Central')
                    ->value('id'),
            ],
            [
                'name' => 'Dass',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Bogoro/Dass/Tafawa-Balewa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi South')
                    ->value('id'),
            ],
            [
                'name' => 'Gamawa',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Gamawa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi North')
                    ->value('id'),
            ],
            [
                'name' => 'Ganjuwa',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Darazo/Ganjuwa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi Central')
                    ->value('id'),
            ],
            [
                'name' => 'Giade',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Katagum/Giade')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi North')
                    ->value('id'),
            ],
            [
                'name' => 'Itas Gadau',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Itas/Gadau')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi North')
                    ->value('id'),
            ],
            [
                'name' => 'Jama\'Are',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Jama\'Are/Itas/Gadau')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi North')
                    ->value('id'),
            ],
            [
                'name' => 'Katagum',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Katagum/Giade')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi North')
                    ->value('id'),
            ],
            [
                'name' => 'Kirfi',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Alkaleri/Kirfi')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi South')
                    ->value('id'),
            ],
            [
                'name' => 'Misau',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Damban/Misau')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi Central')
                    ->value('id'),
            ],
            [
                'name' => 'Ningi',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ningi/Warji')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi Central')
                    ->value('id'),
            ],
            [
                'name' => 'Shira',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Shira/Giade')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi North')
                    ->value('id'),
            ],
            [
                'name' => 'Tafawa-Balewa',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Bogoro/Dass/Tafawa-Balewa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi South')
                    ->value('id'),
            ],
            [
                'name' => 'Toro',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Toro')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi South')
                    ->value('id'),
            ],
            [
                'name' => 'Warji',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ningi/Warji')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi Central')
                    ->value('id'),
            ],
            [
                'name' => 'Zaki',
                'state_id' => 5,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Zaki')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bauchi North')
                    ->value('id'),
            ],

            // Bayelsa state
            [
                'name' => 'Brass',
                'state_id' => 6,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Brass/Nembe')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bayelsa East')
                    ->value('id'),
            ],
            [
                'name' => 'Ekeremor',
                'state_id' => 6,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ekeremor/Sagbama')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bayelsa West')
                    ->value('id'),
            ],
            [
                'name' => 'Kolokuma/Opokuma',
                'state_id' => 6,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Kolokuma/Opokuma/Yenagoa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bayelsa Central')
                    ->value('id'),
            ],
            [
                'name' => 'Nembe',
                'state_id' => 6,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Brass/Nembe')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bayelsa East')
                    ->value('id'),
            ],
            [
                'name' => 'Ogbia',
                'state_id' => 6,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ogbia')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bayelsa East')
                    ->value('id'),
            ],
            [
                'name' => 'Sagbama',
                'state_id' => 6,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ekeremor/Sagbama')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bayelsa West')
                    ->value('id'),
            ],
            [
                'name' => 'Southern-Ijaw',
                'state_id' => 6,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Southern-Ijaw')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bayelsa Central')
                    ->value('id'),
            ],
            [
                'name' => 'Yenagoa',
                'state_id' => 6,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Kolokuma/Opokuma/Yenagoa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Bayelsa Central')
                    ->value('id'),
            ],

            // Benue state
            [
                'name' => 'Ado',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ado/Okpokwu/Ogbadibo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue South')
                    ->value('id'),
            ],
            [
                'name' => 'Agatu',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Agatu/Apa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue South')
                    ->value('id'),
            ],
            [
                'name' => 'Apa',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Agatu/Apa')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue South')
                    ->value('id'),
            ],
            [
                'name' => 'Buruku',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Buruku')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-West')
                    ->value('id'),
            ],
            [
                'name' => 'Gboko',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Gboko/Tarka')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-West')
                    ->value('id'),
            ],
            [
                'name' => 'Guma',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Guma/Makurdi')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-West')
                    ->value('id'),
            ],
            [
                'name' => 'Gwer-East',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Gwer East/Gwer West')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-West')
                    ->value('id'),
            ],
            [
                'name' => 'Gwer-West',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Gwer East/Gwer West')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-West')
                    ->value('id'),
            ],
            [
                'name' => 'Katsina-Ala',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Katsina-Ala/Ukum/Ushongo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-East')
                    ->value('id'),
            ],
            [
                'name' => 'Konshisha',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Konshisha/Vandeikya')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-East')
                    ->value('id'),
            ],
            [
                'name' => 'Kwande',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Kwande/Ushongo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-East')
                    ->value('id'),
            ],
            [
                'name' => 'Logo',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Katsina-Ala/Ukum/Ushongo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-East')
                    ->value('id'),
            ],
            [
                'name' => 'Makurdi',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Guma/Makurdi')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-West')
                    ->value('id'),
            ],
            [
                'name' => 'Ogbadibo',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ado/Okpokwu/Ogbadibo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue South')
                    ->value('id'),
            ],
            [
                'name' => 'Ohimini',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ohimini/Otukpo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue South')
                    ->value('id'),
            ],
            [
                'name' => 'Oju',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Oju/Obi')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue South')
                    ->value('id'),
            ],
            [
                'name' => 'Okpokwu',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ado/Okpokwu/Ogbadibo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue South')
                    ->value('id'),
            ],
            [
                'name' => 'Otukpo',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Ohimini/Otukpo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue South')
                    ->value('id'),
            ],
            [
                'name' => 'Tarka',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Gboko/Tarka')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-West')
                    ->value('id'),
            ],
            [
                'name' => 'Ukum',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Katsina-Ala/Ukum/Ushongo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-East')
                    ->value('id'),
            ],
            [
                'name' => 'Ushongo',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Kwande/Ushongo')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-East')
                    ->value('id'),
            ],
            [
                'name' => 'Vandeikya',
                'state_id' => 7,
                'constituency_id' => DB::table('constituencies')
                    ->where('name', 'Konshisha/Vandeikya')
                    ->value('id'),
                'district_id' => DB::table('districts')
                    ->where('name', 'Benue North-East')
                    ->value('id'),
            ],

            // Borno State
            [
                'name' => 'Abadam',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abadam/Guzamala')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Askira-Uba',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Askira-Uba/Hawul')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno South')->value('id')
            ],
            [
                'name' => 'Bama',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bama/Ngala/Kala Balge')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno Central')->value('id')
            ],
            [
                'name' => 'Bayo',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Biu/Bayo/Shani/Kwaya-Kusar')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno South')->value('id')
            ],
            [
                'name' => 'Biu',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Biu/Bayo/Shani/Kwaya-Kusar')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno South')->value('id')
            ],
            [
                'name' => 'Chibok',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Chibok/Damboa/Gwoza')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno South')->value('id')
            ],
            [
                'name' => 'Damboa',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Chibok/Damboa/Gwoza')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno South')->value('id')
            ],
            [
                'name' => 'Dikwa',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dikwa/Mafa/Konduga')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno Central')->value('id')
            ],
            [
                'name' => 'Gubio',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gubio/Magumeri/Nganzai')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Guzamala',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abadam/Guzamala')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Gwoza',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Chibok/Damboa/Gwoza')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno South')->value('id')
            ],
            [
                'name' => 'Hawul',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Askira-Uba/Hawul')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno South')->value('id')
            ],
            [
                'name' => 'Jere',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jere')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno Central')->value('id')
            ],
            [
                'name' => 'Kaga',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kaga/Magumeri')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Kala Balge',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bama/Ngala/Kala Balge')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno Central')->value('id')
            ],
            [
                'name' => 'Konduga',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dikwa/Mafa/Konduga')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno Central')->value('id')
            ],
            [
                'name' => 'Kukawa',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kukawa/Mobbar')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Kwaya-Kusar',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Biu/Bayo/Shani/Kwaya-Kusar')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno South')->value('id')
            ],
            [
                'name' => 'Mafa',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dikwa/Mafa/Konduga')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno Central')->value('id')
            ],
            [
                'name' => 'Magumeri',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gubio/Magumeri/Nganzai')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Maiduguri',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Maiduguri')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno Central')->value('id')
            ],
            [
                'name' => 'Marte',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Monguno/Marte/Nganzai')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Mobbar',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kukawa/Mobbar')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Monguno',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Monguno/Marte/Nganzai')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Ngala',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bama/Ngala/Kala Balge')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno Central')->value('id')
            ],
            [
                'name' => 'Nganzai',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Monguno/Marte/Nganzai')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno North')->value('id')
            ],
            [
                'name' => 'Shani',
                'state_id' => 8,
                'constituency_id' => DB::table('constituencies')->where('name', 'Biu/Bayo/Shani/Kwaya-Kusar')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Borno South')->value('id')
            ],

            // Cross River State
            [
                'name' => 'Abi',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abi/Yakurr')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River Central')->value('id')
            ],
            [
                'name' => 'Akamkpa',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akamkpa/Biase')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River South')->value('id')
            ],
            [
                'name' => 'Akpabuyo',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akpabuyo/Bakassi/Calabar South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River South')->value('id')
            ],
            [
                'name' => 'Bakassi',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akpabuyo/Bakassi/Calabar South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River South')->value('id')
            ],
            [
                'name' => 'Bekwarra',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bekwarra/Obudu/Obanliku')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River North')->value('id')
            ],
            [
                'name' => 'Biase',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akamkpa/Biase')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River South')->value('id')
            ],
            [
                'name' => 'Boki',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Boki/Ikom')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River Central')->value('id')
            ],
            [
                'name' => 'Calabar-Municipal',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Calabar Municipal/Odukpani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River South')->value('id')
            ],
            [
                'name' => 'Calabar-South',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akpabuyo/Bakassi/Calabar South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River South')->value('id')
            ],
            [
                'name' => 'Etung',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikom/Boki')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River Central')->value('id')
            ],
            [
                'name' => 'Ikom',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikom/Boki')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River Central')->value('id')
            ],
            [
                'name' => 'Obanliku',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bekwarra/Obudu/Obanliku')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River North')->value('id')
            ],
            [
                'name' => 'Obubra',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Obubra/Yakurr')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River Central')->value('id')
            ],
            [
                'name' => 'Obudu',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bekwarra/Obudu/Obanliku')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River North')->value('id')
            ],
            [
                'name' => 'Odukpani',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Calabar Municipal/Odukpani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River South')->value('id')
            ],
            [
                'name' => 'Ogoja',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ogoja/Yala')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River North')->value('id')
            ],
            [
                'name' => 'Yakurr',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abi/Yakurr')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River Central')->value('id')
            ],
            [
                'name' => 'Yala',
                'state_id' => 9,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ogoja/Yala')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Cross River North')->value('id')
            ],

            // Delta state
            // Delta State
            [
                'name' => 'Aniocha North',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aniocha/Oshimili')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta North')->value('id')
            ],
            [
                'name' => 'Aniocha-South',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aniocha/Oshimili')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta North')->value('id')
            ],
            [
                'name' => 'Bomadi',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bomadi/Patani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta South')->value('id')
            ],
            [
                'name' => 'Burutu',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Burutu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta South')->value('id')
            ],
            [
                'name' => 'Ethiope-East',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ethiope')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta Central')->value('id')
            ],
            [
                'name' => 'Ethiope-West',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ethiope')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta Central')->value('id')
            ],
            [
                'name' => 'Ika-North-East',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ika')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta North')->value('id')
            ],
            [
                'name' => 'Ika-South',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ika')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta North')->value('id')
            ],
            [
                'name' => 'Isoko-North',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Isoko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta South')->value('id')
            ],
            [
                'name' => 'Isoko-South',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Isoko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta South')->value('id')
            ],
            [
                'name' => 'Ndokwa-East',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ndokwa/Ukwuani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta North')->value('id')
            ],
            [
                'name' => 'Ndokwa-West',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ndokwa/Ukwuani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta North')->value('id')
            ],
            [
                'name' => 'Okpe',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okpe/Sapele/Uvwie')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta Central')->value('id')
            ],
            [
                'name' => 'Oshimili-North',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aniocha/Oshimili')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta North')->value('id')
            ],
            [
                'name' => 'Oshimili-South',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aniocha/Oshimili')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta North')->value('id')
            ],
            [
                'name' => 'Patani',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bomadi/Patani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta South')->value('id')
            ],
            [
                'name' => 'Sapele',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okpe/Sapele/Uvwie')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta Central')->value('id')
            ],
            [
                'name' => 'Udu',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Udu/Ughelli North/Ughelli South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta Central')->value('id')
            ],
            [
                'name' => 'Ughelli-North',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Udu/Ughelli North/Ughelli South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta Central')->value('id')
            ],
            [
                'name' => 'Ughelli-South',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Udu/Ughelli North/Ughelli South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta Central')->value('id')
            ],
            [
                'name' => 'Ukwuani',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ndokwa/Ukwuani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta North')->value('id')
            ],
            [
                'name' => 'Uvwie',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okpe/Sapele/Uvwie')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta Central')->value('id')
            ],
            [
                'name' => 'Warri South-West',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Warri')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta South')->value('id')
            ],
            [
                'name' => 'Warri North',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Warri')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta South')->value('id')
            ],
            [
                'name' => 'Warri South',
                'state_id' => 10,
                'constituency_id' => DB::table('constituencies')->where('name', 'Warri')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Delta South')->value('id')
            ],

            // Ebonyi State
            [
                'name' => 'Abakaliki',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abakaliki/Izzi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi North')->value('id')
            ],
            [
                'name' => 'Afikpo-North',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Afikpo North/Afikpo South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi South')->value('id')
            ],
            [
                'name' => 'Afikpo South (Edda)',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Afikpo North/Afikpo South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi South')->value('id')
            ],
            [
                'name' => 'Ebonyi',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ohaukwu/Ebonyi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi North')->value('id')
            ],
            [
                'name' => 'Ezza-North',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ezza North/Ishielu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi Central')->value('id')
            ],
            [
                'name' => 'Ezza-South',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ezza South/Ikwo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi Central')->value('id')
            ],
            [
                'name' => 'Ikwo',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ezza South/Ikwo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi Central')->value('id')
            ],
            [
                'name' => 'Ishielu',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ezza North/Ishielu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi Central')->value('id')
            ],
            [
                'name' => 'Ivo',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ohaozara/Onicha/Ivo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi South')->value('id')
            ],
            [
                'name' => 'Izzi',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abakaliki/Izzi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi North')->value('id')
            ],
            [
                'name' => 'Ohaukwu',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ohaukwu/Ebonyi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi North')->value('id')
            ],
            [
                'name' => 'Onicha',
                'state_id' => 11,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ohaozara/Onicha/Ivo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ebonyi South')->value('id')
            ],

            // Edo State
            [
                'name' => 'Akoko-Edo',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akoko-Edo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo North')->value('id')
            ],
            [
                'name' => 'Egor',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egor/Ikpoba-Okha')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo South')->value('id')
            ],
            [
                'name' => 'Esan-Central',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Esan Central/Esan West/Igueben')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo Central')->value('id')
            ],
            [
                'name' => 'Esan-North-East',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Esan South East/Esan North East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo Central')->value('id')
            ],
            [
                'name' => 'Esan-South-East',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Esan South East/Esan North East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo Central')->value('id')
            ],
            [
                'name' => 'Esan-West',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Esan Central/Esan West/Igueben')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo Central')->value('id')
            ],
            [
                'name' => 'Etsako-Central',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Etsako')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo North')->value('id')
            ],
            [
                'name' => 'Etsako-East',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Etsako')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo North')->value('id')
            ],
            [
                'name' => 'Etsako-West',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Etsako')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo North')->value('id')
            ],
            [
                'name' => 'Igueben',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Esan Central/Esan West/Igueben')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo Central')->value('id')
            ],
            [
                'name' => 'Ikpoba-Okha',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egor/Ikpoba-Okha')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo South')->value('id')
            ],
            [
                'name' => 'Orhionmwon',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Orhionmwon/Uhunmwonde')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo South')->value('id')
            ],
            [
                'name' => 'Oredo',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Oredo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo South')->value('id')
            ],
            [
                'name' => 'Ovia-North-East',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ovia')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo South')->value('id')
            ],
            [
                'name' => 'Ovia-South-West',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ovia')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo South')->value('id')
            ],
            [
                'name' => 'Owan-East',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Owan')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo North')->value('id')
            ],
            [
                'name' => 'Owan-West',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Owan')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo North')->value('id')
            ],
            [
                'name' => 'Uhunmwonde',
                'state_id' => 12,
                'constituency_id' => DB::table('constituencies')->where('name', 'Orhionmwon/Uhunmwonde')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Edo South')->value('id')
            ],

            // Ekiti State
            [
                'name' => 'Ado-Ekiti',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ado-Ekiti/Irepodun-Ifelodun')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti Central')->value('id')
            ],
            [
                'name' => 'Efon',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ekiti South West/Ijero/Efon')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti South')->value('id')
            ],
            [
                'name' => 'Ekiti-East',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Emure/Gbonyin/Ekiti East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti South')->value('id')
            ],
            [
                'name' => 'Ekiti-South-West',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ekiti South West/Ijero/Efon')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti South')->value('id')
            ],
            [
                'name' => 'Ekiti-West',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikere/Ise-Orun/Ekiti West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti South')->value('id')
            ],
            [
                'name' => 'Emure',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Emure/Gbonyin/Ekiti East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti South')->value('id')
            ],
            [
                'name' => 'Gbonyin',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Emure/Gbonyin/Ekiti East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti South')->value('id')
            ],
            [
                'name' => 'Ido-Osi',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ido-Osi/Moba/Ilejemeje')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti North')->value('id')
            ],
            [
                'name' => 'Ijero',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ekiti South West/Ijero/Efon')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti Central')->value('id')
            ],
            [
                'name' => 'Ikere',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikere/Ise-Orun/Ekiti West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti South')->value('id')
            ],
            [
                'name' => 'Ikole',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikole/Oye')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti North')->value('id')
            ],
            [
                'name' => 'Ilejemeje',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ido-Osi/Moba/Ilejemeje')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti North')->value('id')
            ],
            [
                'name' => 'Irepodun/Ifelodun',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ado-Ekiti/Irepodun-Ifelodun')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti Central')->value('id')
            ],
            [
                'name' => 'Ise/Orun',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikere/Ise-Orun/Ekiti West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti South')->value('id')
            ],
            [
                'name' => 'Moba',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ido-Osi/Moba/Ilejemeje')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti North')->value('id')
            ],
            [
                'name' => 'Oye',
                'state_id' => 13,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikole/Oye')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ekiti North')->value('id')
            ],

            // Enugu State
            [
                'name' => 'Aninri',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Awgu/Aninri/Oji River')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu West')->value('id')
            ],
            [
                'name' => 'Awgu',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Awgu/Aninri/Oji River')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu West')->value('id')
            ],
            [
                'name' => 'Enugu-East',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Enugu North/Enugu South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu East')->value('id')
            ],
            [
                'name' => 'Enugu-North',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Enugu North/Enugu South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu East')->value('id')
            ],
            [
                'name' => 'Enugu-South',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Enugu North/Enugu South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu East')->value('id')
            ],
            [
                'name' => 'Ezeagu',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Udi/Ezeagu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu West')->value('id')
            ],
            [
                'name' => 'Igbo-Etiti',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Igbo-Etiti/Uzo-Uwani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu North')->value('id')
            ],
            [
                'name' => 'Igbo-Eze-North',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Igbo-Eze North/Igbo-Eze South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu North')->value('id')
            ],
            [
                'name' => 'Igbo-Eze-South',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Igbo-Eze North/Igbo-Eze South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu North')->value('id')
            ],
            [
                'name' => 'Isi-Uzo',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Enugu East/Isi-Uzo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu East')->value('id')
            ],
            [
                'name' => 'Nkanu-East',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nkanu East/Nkanu West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu East')->value('id')
            ],
            [
                'name' => 'Nkanu-West',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nkanu East/Nkanu West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu East')->value('id')
            ],
            [
                'name' => 'Nsukka',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nsukka/Igbo-Etiti')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu North')->value('id')
            ],
            [
                'name' => 'Oji-River',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Awgu/Aninri/Oji River')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu West')->value('id')
            ],
            [
                'name' => 'Udenu',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Igbo-Eze North/Igbo-Eze South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu North')->value('id')
            ],
            [
                'name' => 'Udi',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Udi/Ezeagu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu West')->value('id')
            ],
            [
                'name' => 'Uzo-Uwani',
                'state_id' => 14,
                'constituency_id' => DB::table('constituencies')->where('name', 'Igbo-Etiti/Uzo-Uwani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Enugu North')->value('id')
            ],

            // Gombe State
            [
                'name' => 'Akko',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe Central')->value('id')
            ],
            [
                'name' => 'Balanga',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Balanga/Billiri')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe South')->value('id')
            ],
            [
                'name' => 'Billiri',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Balanga/Billiri')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe South')->value('id')
            ],
            [
                'name' => 'Dukku',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dukku/Nafada')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe North')->value('id')
            ],
            [
                'name' => 'Funakaye',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gombe/Kwami/Funakaye')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe North')->value('id')
            ],
            [
                'name' => 'Gombe',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gombe/Kwami/Funakaye')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe Central')->value('id')
            ],
            [
                'name' => 'Kaltungo',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kaltungo/Shongom')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe South')->value('id')
            ],
            [
                'name' => 'Kwami',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gombe/Kwami/Funakaye')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe Central')->value('id')
            ],
            [
                'name' => 'Nafada',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dukku/Nafada')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe North')->value('id')
            ],
            [
                'name' => 'Shongom',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kaltungo/Shongom')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe South')->value('id')
            ],
            [
                'name' => 'Yamaltu-Deba',
                'state_id' => 15,
                'constituency_id' => DB::table('constituencies')->where('name', 'Yamaltu-Deba')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Gombe Central')->value('id')
            ],

            // Imo State
            [
                'name' => 'Aboh-Mbaise',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aboh Mbaise/Ngor Okpala')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo East')->value('id')
            ],
            [
                'name' => 'Ahiazu-Mbaise',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ahiazu Mbaise/Ezinihitte')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo East')->value('id')
            ],
            [
                'name' => 'Ehime-Mbano',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ehime Mbano/Ihitte Uboma/Obowo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo North')->value('id')
            ],
            [
                'name' => 'Ezinihitte',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ahiazu Mbaise/Ezinihitte')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo East')->value('id')
            ],
            [
                'name' => 'Ideato-North',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ideato North/Ideato South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Ideato-South',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ideato North/Ideato South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Ihitte/Uboma',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ehime Mbano/Ihitte Uboma/Obowo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo North')->value('id')
            ],
            [
                'name' => 'Ikeduru',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Mbaitoli/Ikeduru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo East')->value('id')
            ],
            [
                'name' => 'Isiala-Mbano',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okigwe/Onuimo/Isiala Mbano')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo North')->value('id')
            ],
            [
                'name' => 'Isu',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nwangele/Isu/Njaba/Nkwerre')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Mbaitoli',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Mbaitoli/Ikeduru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo East')->value('id')
            ],
            [
                'name' => 'Ngor-Okpala',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aboh Mbaise/Ngor Okpala')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo East')->value('id')
            ],
            [
                'name' => 'Njaba',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nwangele/Isu/Njaba/Nkwerre')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Nkwerre',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nwangele/Isu/Njaba/Nkwerre')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Nwangele',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nwangele/Isu/Njaba/Nkwerre')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Obowo',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ehime Mbano/Ihitte Uboma/Obowo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo North')->value('id')
            ],
            [
                'name' => 'Oguta',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Oguta/Ohaji-Egbema/Oru West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Ohaji/Egbema',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Oguta/Ohaji-Egbema/Oru West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Okigwe',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okigwe/Onuimo/Isiala Mbano')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo North')->value('id')
            ],
            [
                'name' => 'Orlu',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Orlu/Orsu/Oru East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Orsu',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Orlu/Orsu/Oru East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Oru-East',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Orlu/Orsu/Oru East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Oru-West',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Oguta/Ohaji-Egbema/Oru West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo West')->value('id')
            ],
            [
                'name' => 'Owerri-Municipal',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Owerri Municipal/Owerri North/Owerri West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo East')->value('id')
            ],
            [
                'name' => 'Owerri-North',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Owerri Municipal/Owerri North/Owerri West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo East')->value('id')
            ],
            [
                'name' => 'Owerri-West',
                'state_id' => 16,
                'constituency_id' => DB::table('constituencies')->where('name', 'Owerri Municipal/Owerri North/Owerri West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Imo East')->value('id')
            ],

            // Jigawa state
            // Jigawa State
            [
                'name' => 'Auyo',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Hadejia/Auyo/Kafin Hausa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-East')->value('id')
            ],
            [
                'name' => 'Babura',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Babura/Garki')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Biriniwa',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Biriniwa/Guri/Kiri Kasama')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-East')->value('id')
            ],
            [
                'name' => 'Birnin-Kudu',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Birnin Kudu/Buji')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa South-West')->value('id')
            ],
            [
                'name' => 'Buji',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Birnin Kudu/Buji')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa South-West')->value('id')
            ],
            [
                'name' => 'Dutse',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dutse/Kiyawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa South-West')->value('id')
            ],
            [
                'name' => 'Gagarawa',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gumel/Maigatari/Sule Tankarkar/Gagarawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Garki',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Babura/Garki')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Gumel',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gumel/Maigatari/Sule Tankarkar/Gagarawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Guri',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Biriniwa/Guri/Kiri Kasama')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-East')->value('id')
            ],
            [
                'name' => 'Gwaram',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gwaram')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa South-West')->value('id')
            ],
            [
                'name' => 'Gwiwa',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kazaure/Roni/Gwiwa/Yankwashi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Hadejia',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Hadejia/Auyo/Kafin Hausa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-East')->value('id')
            ],
            [
                'name' => 'Jahun',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jahun/Miga')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa South-West')->value('id')
            ],
            [
                'name' => 'Kafin-Hausa',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Hadejia/Auyo/Kafin Hausa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-East')->value('id')
            ],
            [
                'name' => 'Kaugama',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Malam Madori/Kaugama')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-East')->value('id')
            ],
            [
                'name' => 'Kazaure',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kazaure/Roni/Gwiwa/Yankwashi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Kiri-Kasama',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Biriniwa/Guri/Kiri Kasama')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-East')->value('id')
            ],
            [
                'name' => 'Kiyawa',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dutse/Kiyawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa South-West')->value('id')
            ],
            [
                'name' => 'Maigatari',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gumel/Maigatari/Sule Tankarkar/Gagarawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Malam-Madori',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Malam Madori/Kaugama')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-East')->value('id')
            ],
            [
                'name' => 'Miga',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jahun/Miga')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa South-West')->value('id')
            ],
            [
                'name' => 'Ringim',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ringim/Taura')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Roni',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kazaure/Roni/Gwiwa/Yankwashi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Sule-Tankarkar',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gumel/Maigatari/Sule Tankarkar/Gagarawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Taura',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ringim/Taura')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],
            [
                'name' => 'Yankwashi',
                'state_id' => 17,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kazaure/Roni/Gwiwa/Yankwashi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Jigawa North-West')->value('id')
            ],

            // Kaduna State
            [
                'name' => 'Birnin-Gwari',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Birnin Gwari/Giwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Chikun',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Chikun/Kajuru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna Central')->value('id')
            ],
            [
                'name' => 'Giwa',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Birnin Gwari/Giwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Igabi',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Igabi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Ikara',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikara/Kubau')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Jaba',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jaba/Zangon Kataf')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna South')->value('id')
            ],
            [
                'name' => 'Jema\'A',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jema\'a/Sanga')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna South')->value('id')
            ],
            [
                'name' => 'Kachia',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kachia/Kagarko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna South')->value('id')
            ],
            [
                'name' => 'Kaduna-North',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kaduna North')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna Central')->value('id')
            ],
            [
                'name' => 'Kaduna-South',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kaduna South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna Central')->value('id')
            ],
            [
                'name' => 'Kagarko',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kachia/Kagarko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna South')->value('id')
            ],
            [
                'name' => 'Kajuru',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Chikun/Kajuru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna Central')->value('id')
            ],
            [
                'name' => 'Kaura',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kaura')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna South')->value('id')
            ],
            [
                'name' => 'Kauru',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kauru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Kubau',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikara/Kubau')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Kudan',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Makarfi/Kudan')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Lere',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lere')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Makarfi',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Makarfi/Kudan')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Sabon-Gari',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Sabon Gari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Sanga',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jema\'a/Sanga')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna South')->value('id')
            ],
            [
                'name' => 'Soba',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Soba')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],
            [
                'name' => 'Zangon-Kataf',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jaba/Zangon Kataf')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna South')->value('id')
            ],
            [
                'name' => 'Zaria',
                'state_id' => 18,
                'constituency_id' => DB::table('constituencies')->where('name', 'Zaria')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kaduna North')->value('id')
            ],

            // Kano State
            [
                'name' => 'Ajingi',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ajingi/Albasu/Gaya')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Albasu',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ajingi/Albasu/Gaya')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Bagwai',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bagwai/Shanono')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Bebeji',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bebeji/Kiru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Bichi',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bichi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Bunkure',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Rano/Bunkure/Kibiya')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Dala',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dala')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano Central')->value('id')
            ],
            [
                'name' => 'Dambatta',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dambatta/Makoda')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Dawakin-Kudu',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dawakin Kudu/Warawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Dawakin-Tofa',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dawakin Tofa/Tofa/Rimin Gado')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Doguwa',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Doguwa/Tudun Wada')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Fagge',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Fagge')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano Central')->value('id')
            ],
            [
                'name' => 'Gabasawa',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gezawa/Gabasawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Garko',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Garko/Kunchi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Garun-Mallam',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kura/Madobi/Garun Mallam')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Gaya',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ajingi/Albasu/Gaya')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Gezawa',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gezawa/Gabasawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Gwale',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gwale')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano Central')->value('id')
            ],
            [
                'name' => 'Gwarzo',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gwarzo/Kabo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Kabo',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gwarzo/Kabo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Kano-Municipal',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kano Municipal')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano Central')->value('id')
            ],
            [
                'name' => 'Karaye',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Karaye/Rogo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Kibiya',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Rano/Bunkure/Kibiya')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Kiru',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bebeji/Kiru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Kumbotso',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kumbotso')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano Central')->value('id')
            ],
            [
                'name' => 'Kunchi',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kunchi/Tsanyawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Kura',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kura/Madobi/Garun Mallam')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Madobi',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kura/Madobi/Garun Mallam')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Makoda',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dambatta/Makoda')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Minjibir',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Minjibir/Ungogo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Nasarawa',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nasarawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano Central')->value('id')
            ],
            [
                'name' => 'Rano',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Rano/Bunkure/Kibiya')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Rimin-Gado',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dawakin Tofa/Tofa/Rimin Gado')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Rogo',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Karaye/Rogo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Shanono',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bagwai/Shanono')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Sumaila',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Sumaila/Takai')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Takai',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Sumaila/Takai')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Tarauni',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Tarauni')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano Central')->value('id')
            ],
            [
                'name' => 'Tofa',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dawakin Tofa/Tofa/Rimin Gado')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Tsanyawa',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kunchi/Tsanyawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Tudun-Wada',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Doguwa/Tudun Wada')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Ungogo',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Minjibir/Ungogo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano North')->value('id')
            ],
            [
                'name' => 'Warawa',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dawakin Kudu/Warawa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],
            [
                'name' => 'Wudil',
                'state_id' => 19,
                'constituency_id' => DB::table('constituencies')->where('name', 'Wudil/Garko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kano South')->value('id')
            ],

            // Katsina State
            [
                'name' => 'Bakori',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bakori/Danja')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Batagarawa',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Batagarawa/Rimi/Charanchi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Batsari',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Batsari/Safana/Danmusa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Baure',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Baure/Zango')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina North')->value('id')
            ],
            [
                'name' => 'Bindawa',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bindawa/Mani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina North')->value('id')
            ],
            [
                'name' => 'Charanchi',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Batagarawa/Rimi/Charanchi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Dan-Musa',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Batsari/Safana/Danmusa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Dandume',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Funtua/Dandume')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Danja',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bakori/Danja')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Daura',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Daura/Sandamu/Mai\'adua')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina North')->value('id')
            ],
            [
                'name' => 'Dutsi',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dutsi/Mashi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina North')->value('id')
            ],
            [
                'name' => 'Dutsin-Ma',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dutsin-Ma/Kurfi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Faskari',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Faskari/Kankara/Sabuwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Funtua',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Funtua/Dandume')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Ingawa',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kankia/Ingawa/Kusada')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Jibia',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jibia/Kaita')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Kafur',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Malumfashi/Kafur')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Kaita',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jibia/Kaita')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Kankara',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Faskari/Kankara/Sabuwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Kankia',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kankia/Ingawa/Kusada')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Katsina',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Katsina')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Kurfi',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dutsin-Ma/Kurfi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Kusada',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kankia/Ingawa/Kusada')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Mai\'Adua',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Daura/Sandamu/Mai\'adua')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina North')->value('id')
            ],
            [
                'name' => 'Malumfashi',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Malumfashi/Kafur')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Mani',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bindawa/Mani')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina North')->value('id')
            ],
            [
                'name' => 'Mashi',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dutsi/Mashi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina North')->value('id')
            ],
            [
                'name' => 'Matazu',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Musawa/Matazu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Musawa',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Musawa/Matazu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Rimi',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Batagarawa/Rimi/Charanchi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Sabuwa',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Faskari/Kankara/Sabuwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina South')->value('id')
            ],
            [
                'name' => 'Safana',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Batsari/Safana/Danmusa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina Central')->value('id')
            ],
            [
                'name' => 'Sandamu',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Daura/Sandamu/Mai\'adua')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina North')->value('id')
            ],
            [
                'name' => 'Zango',
                'state_id' => 20,
                'constituency_id' => DB::table('constituencies')->where('name', 'Baure/Zango')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Katsina North')->value('id')
            ],

            // Kebbi State
            [
                'name' => 'Aleiro',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aleiro/Gwandu/Jega')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi Central')->value('id')
            ],
            [
                'name' => 'Arewa-Dandi',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Arewa/Dandi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi North')->value('id')
            ],
            [
                'name' => 'Argungu',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Argungu/Augie')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi North')->value('id')
            ],
            [
                'name' => 'Augie',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Argungu/Augie')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi North')->value('id')
            ],
            [
                'name' => 'Bagudo',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bagudo/Suru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi North')->value('id')
            ],
            [
                'name' => 'Birnin-Kebbi',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Birnin Kebbi/Kalgo/Bunza')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi Central')->value('id')
            ],
            [
                'name' => 'Bunza',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Birnin Kebbi/Kalgo/Bunza')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi Central')->value('id')
            ],
            [
                'name' => 'Dandi',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Arewa/Dandi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi North')->value('id')
            ],
            [
                'name' => 'Fakai',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Zuru/Fakai/Sakaba/Wasagu-Danko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi South')->value('id')
            ],
            [
                'name' => 'Gwandu',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aleiro/Gwandu/Jega')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi Central')->value('id')
            ],
            [
                'name' => 'Jega',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aleiro/Gwandu/Jega')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi Central')->value('id')
            ],
            [
                'name' => 'Kalgo',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Birnin Kebbi/Kalgo/Bunza')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi Central')->value('id')
            ],
            [
                'name' => 'Koko-Besse',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Koko-Besse/Maiyama')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi North')->value('id')
            ],
            [
                'name' => 'Maiyama',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Koko-Besse/Maiyama')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi North')->value('id')
            ],
            [
                'name' => 'Ngaski',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Yauri/Shanga/Ngaski')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi South')->value('id')
            ],
            [
                'name' => 'Sakaba',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Zuru/Fakai/Sakaba/Wasagu-Danko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi South')->value('id')
            ],
            [
                'name' => 'Shanga',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Yauri/Shanga/Ngaski')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi South')->value('id')
            ],
            [
                'name' => 'Suru',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bagudo/Suru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi North')->value('id')
            ],
            [
                'name' => 'Wasagu/Danko',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Zuru/Fakai/Sakaba/Wasagu-Danko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi South')->value('id')
            ],
            [
                'name' => 'Yauri',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Yauri/Shanga/Ngaski')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi South')->value('id')
            ],
            [
                'name' => 'Zuru',
                'state_id' => 21,
                'constituency_id' => DB::table('constituencies')->where('name', 'Zuru/Fakai/Sakaba/Wasagu-Danko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kebbi South')->value('id')
            ],

            // Kogi State
            [
                'name' => 'Adavi',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Adavi/Okehi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi Central')->value('id')
            ],
            [
                'name' => 'Ajaokuta',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ajaokuta')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi Central')->value('id')
            ],
            [
                'name' => 'Ankpa',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ankpa/Omala/Olamaboro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi East')->value('id')
            ],
            [
                'name' => 'Bassa',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dekina/Bassa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi East')->value('id')
            ],
            [
                'name' => 'Dekina',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Dekina/Bassa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi East')->value('id')
            ],
            [
                'name' => 'Ibaji',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Idah/Ibaji/Igalamela-Odolu/Ofu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi East')->value('id')
            ],
            [
                'name' => 'Idah',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Idah/Ibaji/Igalamela-Odolu/Ofu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi East')->value('id')
            ],
            [
                'name' => 'Igalamela-Odolu',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Idah/Ibaji/Igalamela-Odolu/Ofu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi East')->value('id')
            ],
            [
                'name' => 'Ijumu',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kabba-Bunu/Ijumu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi West')->value('id')
            ],
            [
                'name' => 'Kabba/Bunu',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kabba-Bunu/Ijumu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi West')->value('id')
            ],
            [
                'name' => 'Kogi',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lokoja/Kogi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi West')->value('id')
            ],
            [
                'name' => 'Lokoja',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lokoja/Kogi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi West')->value('id')
            ],
            [
                'name' => 'Mopa-Muro',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Yagba East/Yagba West/Mopa-Muro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi West')->value('id')
            ],
            [
                'name' => 'Ofu',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Idah/Ibaji/Igalamela-Odolu/Ofu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi East')->value('id')
            ],
            [
                'name' => 'Ogori/Magongo',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okene/Ogori-Magongo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi Central')->value('id')
            ],
            [
                'name' => 'Okehi',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Adavi/Okehi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi Central')->value('id')
            ],
            [
                'name' => 'Okene',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okene/Ogori-Magongo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi Central')->value('id')
            ],
            [
                'name' => 'Olamaboro',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ankpa/Omala/Olamaboro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi East')->value('id')
            ],
            [
                'name' => 'Omala',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ankpa/Omala/Olamaboro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi East')->value('id')
            ],
            [
                'name' => 'Yagba-East',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Yagba East/Yagba West/Mopa-Muro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi West')->value('id')
            ],
            [
                'name' => 'Yagba-West',
                'state_id' => 22,
                'constituency_id' => DB::table('constituencies')->where('name', 'Yagba East/Yagba West/Mopa-Muro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kogi West')->value('id')
            ],

            // Kwara State
            [
                'name' => 'Asa',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Asa/Ilorin West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara Central')->value('id')
            ],
            [
                'name' => 'Baruten',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Baruten/Kaiama')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara North')->value('id')
            ],
            [
                'name' => 'Edu',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Edu/Moro/Pategi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara North')->value('id')
            ],
            [
                'name' => 'Ekiti',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Irepodun/Isin/Oke-Ero/Ekiti')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara South')->value('id')
            ],
            [
                'name' => 'Ifelodun',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ifelodun/Offa/Oyun')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara South')->value('id')
            ],
            [
                'name' => 'Ilorin-East',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ilorin East/Ilorin South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara Central')->value('id')
            ],
            [
                'name' => 'Ilorin-South',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ilorin East/Ilorin South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara Central')->value('id')
            ],
            [
                'name' => 'Ilorin-West',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Asa/Ilorin West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara Central')->value('id')
            ],
            [
                'name' => 'Irepodun',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Irepodun/Isin/Oke-Ero/Ekiti')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara South')->value('id')
            ],
            [
                'name' => 'Isin',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Irepodun/Isin/Oke-Ero/Ekiti')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara South')->value('id')
            ],
            [
                'name' => 'Kaiama',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Baruten/Kaiama')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara North')->value('id')
            ],
            [
                'name' => 'Moro',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Edu/Moro/Pategi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara North')->value('id')
            ],
            [
                'name' => 'Offa',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ifelodun/Offa/Oyun')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara South')->value('id')
            ],
            [
                'name' => 'Oke-Ero',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Irepodun/Isin/Oke-Ero/Ekiti')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara South')->value('id')
            ],
            [
                'name' => 'Oyun',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ifelodun/Offa/Oyun')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara South')->value('id')
            ],
            [
                'name' => 'Pategi',
                'state_id' => 23,
                'constituency_id' => DB::table('constituencies')->where('name', 'Edu/Moro/Pategi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Kwara North')->value('id')
            ],

            // Lagos State
            [
                'name' => 'Agege',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Agege')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Ajeromi-Ifelodun',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ajeromi-Ifelodun')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Alimosho',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Alimosho')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Amuwo-Odofin',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Amuwo-Odofin')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Apapa',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Apapa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Badagry',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Badagry')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Epe',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Epe')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos East')->value('id')
            ],
            [
                'name' => 'Eti-Osa',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Eti-Osa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos East')->value('id')
            ],
            [
                'name' => 'Ibeju-Lekki',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibeju-Lekki')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos East')->value('id')
            ],
            [
                'name' => 'Ifako-Ijaiye',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ifako-Ijaiye')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Ikeja',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikeja')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Ikorodu',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikorodu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos East')->value('id')
            ],
            [
                'name' => 'Kosofe',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kosofe')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos East')->value('id')
            ],
            [
                'name' => 'Lagos-Island',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lagos Island')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos Central')->value('id')
            ],
            [
                'name' => 'Lagos-Mainland',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lagos Mainland')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos Central')->value('id')
            ],
            [
                'name' => 'Mushin',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Mushin')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Ojo',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ojo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Oshodi-Isolo',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Oshodi-Isolo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos West')->value('id')
            ],
            [
                'name' => 'Shomolu',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shomolu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos East')->value('id')
            ],
            [
                'name' => 'Surulere',
                'state_id' => 24,
                'constituency_id' => DB::table('constituencies')->where('name', 'Surulere')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Lagos Central')->value('id')
            ],

            // Nasarawa State
            [
                'name' => 'Akwanga',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akwanga/Nasarawa-Eggon/Wamba')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa North')->value('id')
            ],
            [
                'name' => 'Awe',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Doma/Awe/Keana')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa South')->value('id')
            ],
            [
                'name' => 'Doma',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Doma/Awe/Keana')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa South')->value('id')
            ],
            [
                'name' => 'Karu',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Karu/Keffi/Kokona')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa West')->value('id')
            ],
            [
                'name' => 'Keana',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Doma/Awe/Keana')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa South')->value('id')
            ],
            [
                'name' => 'Keffi',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Karu/Keffi/Kokona')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa West')->value('id')
            ],
            [
                'name' => 'Kokona',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Karu/Keffi/Kokona')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa West')->value('id')
            ],
            [
                'name' => 'Lafia',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lafia/Obi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa South')->value('id')
            ],
            [
                'name' => 'Nasarawa',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nasarawa/Toto')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa West')->value('id')
            ],
            [
                'name' => 'Nasarawa-Eggon',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akwanga/Nasarawa-Eggon/Wamba')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa North')->value('id')
            ],
            [
                'name' => 'Obi',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lafia/Obi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa South')->value('id')
            ],
            [
                'name' => 'Toto',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nasarawa/Toto')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa West')->value('id')
            ],
            [
                'name' => 'Wamba',
                'state_id' => 25,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akwanga/Nasarawa-Eggon/Wamba')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Nasarawa North')->value('id')
            ],

            // Niger State
            [
                'name' => 'Agaie',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Agaie/Lapai')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Agwara',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Borgu/Agwara')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger North')->value('id')
            ],
            [
                'name' => 'Bida',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bida/Gbako/Katcha')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Borgu',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Borgu/Agwara')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger North')->value('id')
            ],
            [
                'name' => 'Bosso',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bosso/Paikoro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Chanchaga',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Chanchaga')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Edati',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lavun/Mokwa/Edati')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger South')->value('id')
            ],
            [
                'name' => 'Gbako',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bida/Gbako/Katcha')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Gurara',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Suleja/Tafa/Gurara')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger South')->value('id')
            ],
            [
                'name' => 'Katcha',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bida/Gbako/Katcha')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Kontagora',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kontagora/Wushishi/Mariga/Mashegu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger North')->value('id')
            ],
            [
                'name' => 'Lapai',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Agaie/Lapai')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Lavun',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lavun/Mokwa/Edati')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger South')->value('id')
            ],
            [
                'name' => 'Magama',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Magama/Rijau')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger North')->value('id')
            ],
            [
                'name' => 'Mariga',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kontagora/Wushishi/Mariga/Mashegu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger North')->value('id')
            ],
            [
                'name' => 'Mashegu',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kontagora/Wushishi/Mariga/Mashegu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger North')->value('id')
            ],
            [
                'name' => 'Mokwa',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Lavun/Mokwa/Edati')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger South')->value('id')
            ],
            [
                'name' => 'Munya',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shiroro/Rafi/Munya')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Paikoro',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bosso/Paikoro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Rafi',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shiroro/Rafi/Munya')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Rijau',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Magama/Rijau')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger North')->value('id')
            ],
            [
                'name' => 'Shiroro',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shiroro/Rafi/Munya')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger East')->value('id')
            ],
            [
                'name' => 'Suleja',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Suleja/Tafa/Gurara')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger South')->value('id')
            ],
            [
                'name' => 'Tafa',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Suleja/Tafa/Gurara')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger South')->value('id')
            ],
            [
                'name' => 'Wushishi',
                'state_id' => 26,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kontagora/Wushishi/Mariga/Mashegu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Niger North')->value('id')
            ],

            // Ogun State
            [
                'name' => 'Abeokuta-North',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abeokuta North/Obafemi-Owode/Odeda')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun Central')->value('id')
            ],
            [
                'name' => 'Abeokuta-South',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abeokuta South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun Central')->value('id')
            ],
            [
                'name' => 'Ado-Odo/Ota',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ado-Odo/Ota')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun West')->value('id')
            ],
            [
                'name' => 'Egbado-North',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egbado North/Imeko-Afon')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun West')->value('id')
            ],
            [
                'name' => 'Egbado-South',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egbado South/Ipokia')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun West')->value('id')
            ],
            [
                'name' => 'Ewekoro',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ifo/Ewekoro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun Central')->value('id')
            ],
            [
                'name' => 'Ifo',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ifo/Ewekoro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun Central')->value('id')
            ],
            [
                'name' => 'Ijebu-East',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ijebu East/Ijebu North/Ogun Waterside')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun East')->value('id')
            ],
            [
                'name' => 'Ijebu-North',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ijebu East/Ijebu North/Ogun Waterside')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun East')->value('id')
            ],
            [
                'name' => 'Ijebu-North-East',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ijebu Ode/Odogbolu/Ijebu North East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun East')->value('id')
            ],
            [
                'name' => 'Ijebu-Ode',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ijebu Ode/Odogbolu/Ijebu North East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun East')->value('id')
            ],
            [
                'name' => 'Ikenne',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikenne/Shagamu/Remo North')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun East')->value('id')
            ],
            [
                'name' => 'Imeko-Afon',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egbado North/Imeko-Afon')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun West')->value('id')
            ],
            [
                'name' => 'Ipokia',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egbado South/Ipokia')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun West')->value('id')
            ],
            [
                'name' => 'Obafemi-Owode',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abeokuta North/Obafemi-Owode/Odeda')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun Central')->value('id')
            ],
            [
                'name' => 'Odeda',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abeokuta North/Obafemi-Owode/Odeda')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun Central')->value('id')
            ],
            [
                'name' => 'Odogbolu',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ijebu Ode/Odogbolu/Ijebu North East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun East')->value('id')
            ],
            [
                'name' => 'Ogun-Waterside',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ijebu East/Ijebu North/Ogun Waterside')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun East')->value('id')
            ],
            [
                'name' => 'Remo-North',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikenne/Shagamu/Remo North')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun East')->value('id')
            ],
            [
                'name' => 'Shagamu',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ikenne/Shagamu/Remo North')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun East')->value('id')
            ],
            [
                'name' => 'Yewa-North',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egbado North/Imeko-Afon')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun West')->value('id')
            ],
            [
                'name' => 'Yewa-South',
                'state_id' => 27,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egbado South/Ipokia')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ogun West')->value('id')
            ],

            // Ondo State
            [
                'name' => 'Akoko-North-East',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akoko North East/Akoko North West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo North')->value('id')
            ],
            [
                'name' => 'Akoko-North-West',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akoko North East/Akoko North West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo North')->value('id')
            ],
            [
                'name' => 'Akoko-South-East',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akoko South East/Akoko South West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo North')->value('id')
            ],
            [
                'name' => 'Akoko-South-West',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akoko South East/Akoko South West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo North')->value('id')
            ],
            [
                'name' => 'Akure-North',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akure North/Akure South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo Central')->value('id')
            ],
            [
                'name' => 'Akure-South',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akure North/Akure South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo Central')->value('id')
            ],
            [
                'name' => 'Ese-Odo',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ilaje/Ese-Odo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo South')->value('id')
            ],
            [
                'name' => 'Idanre',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Idanre/Ifedore')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo Central')->value('id')
            ],
            [
                'name' => 'Ifedore',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Idanre/Ifedore')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo Central')->value('id')
            ],
            [
                'name' => 'Ilaje',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ilaje/Ese-Odo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo South')->value('id')
            ],
            [
                'name' => 'Ile-Oluji/Okeigbo',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ile-Oluji-Okeigbo/Odigbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo South')->value('id')
            ],
            [
                'name' => 'Irele',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okitipupa/Irele')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo South')->value('id')
            ],
            [
                'name' => 'Odigbo',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ile-Oluji-Okeigbo/Odigbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo South')->value('id')
            ],
            [
                'name' => 'Okitipupa',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okitipupa/Irele')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo South')->value('id')
            ],
            [
                'name' => 'Ondo-East',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ondo East/Ondo West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo Central')->value('id')
            ],
            [
                'name' => 'Ondo-West',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ondo East/Ondo West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo Central')->value('id')
            ],
            [
                'name' => 'Ose',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Owo/Ose')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo North')->value('id')
            ],
            [
                'name' => 'Owo',
                'state_id' => 28,
                'constituency_id' => DB::table('constituencies')->where('name', 'Owo/Ose')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Ondo North')->value('id')
            ],

            // Osun State
            [
                'name' => 'Aiyedade',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aiyedade/Isokan/Irewole')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Aiyedire',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Iwo/Aiyedire/Ola-Oluwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Atakunmosa-East',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ilesa East/Ilesa West/Atakunmosa East/Atakunmosa West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Atakunmosa-West',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ilesa East/Ilesa West/Atakunmosa East/Atakunmosa West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Boluwaduro',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Boluwaduro/Ifedayo/Ila')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],
            [
                'name' => 'Boripe',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Boripe/Ifelodun/Odo-Otin')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],
            [
                'name' => 'Ede-North',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ede North/Ede South/Egbedore/Ejigbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Ede-South',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ede North/Ede South/Egbedore/Ejigbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Egbedore',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ede North/Ede South/Egbedore/Ejigbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Ejigbo',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ede North/Ede South/Egbedore/Ejigbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Ife-Central',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ife Central/Ife East/Ife North/Ife South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Ife-East',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ife Central/Ife East/Ife North/Ife South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Ife-North',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ife Central/Ife East/Ife North/Ife South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Ife-South',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ife Central/Ife East/Ife North/Ife South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Ifedayo',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Boluwaduro/Ifedayo/Ila')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],
            [
                'name' => 'Ifelodun',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Boripe/Ifelodun/Odo-Otin')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],
            [
                'name' => 'Ila',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Boluwaduro/Ifedayo/Ila')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],
            [
                'name' => 'Ilesa-East',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ilesa East/Ilesa West/Atakunmosa East/Atakunmosa West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Ilesa-West',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ilesa East/Ilesa West/Atakunmosa East/Atakunmosa West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Irepodun',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Irepodun/Orolu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],
            [
                'name' => 'Irewole',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aiyedade/Isokan/Irewole')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Isokan',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Aiyedade/Isokan/Irewole')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Iwo',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Iwo/Aiyedire/Ola-Oluwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Obokun',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Obokun/Oriade')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Odo-Otin',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Boripe/Ifelodun/Odo-Otin')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],
            [
                'name' => 'Ola-Oluwa',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Iwo/Aiyedire/Ola-Oluwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun West')->value('id')
            ],
            [
                'name' => 'Olorunda',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Osogbo/Olorunda/Orolu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],
            [
                'name' => 'Oriade',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Obokun/Oriade')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun East')->value('id')
            ],
            [
                'name' => 'Orolu',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Osogbo/Olorunda/Orolu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],
            [
                'name' => 'Osogbo',
                'state_id' => 29,
                'constituency_id' => DB::table('constituencies')->where('name', 'Osogbo/Olorunda/Orolu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Osun Central')->value('id')
            ],

            // Oyo State
            [
                'name' => 'Afijio',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Afijio/Atiba/Oyo East/Oyo West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Akinyele',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akinyele/Lagelu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Atiba',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Afijio/Atiba/Oyo East/Oyo West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Atisbo',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Saki West/Saki East/Atisbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Egbeda',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egbeda/Ona-Ara')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Ibadan-Central',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibadan North')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Ibadan-North',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibadan North')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Ibadan-North-East',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibadan North East/Ibadan South East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Ibadan-North-West',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibadan North West/Ibadan South West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Ibadan-South-East',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibadan North East/Ibadan South East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Ibadan-South-West',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibadan North West/Ibadan South West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Ibarapa-Central',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibarapa Central/Ibarapa North')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo South')->value('id')
            ],
            [
                'name' => 'Ibarapa-East',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibarapa East/Ido')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo South')->value('id')
            ],
            [
                'name' => 'Ibarapa-North',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibarapa Central/Ibarapa North')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo South')->value('id')
            ],
            [
                'name' => 'Ido',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ibarapa East/Ido')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo South')->value('id')
            ],
            [
                'name' => 'Irepo',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Irepo/Orelope/Olorunsogo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Iseyin',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Iseyin/Itesiwaju/Kajola/Iwajowa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Itesiwaju',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Iseyin/Itesiwaju/Kajola/Iwajowa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Iwajowa',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Iseyin/Itesiwaju/Kajola/Iwajowa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Kajola',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Iseyin/Itesiwaju/Kajola/Iwajowa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Lagelu',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akinyele/Lagelu')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Ogbomosho-North',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ogbomosho North/Ogbomosho South/Ori-Ire')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Ogbomosho-South',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ogbomosho North/Ogbomosho South/Ori-Ire')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Ogo-Oluwa',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ogo-Oluwa/Surulere')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo South')->value('id')
            ],
            [
                'name' => 'Olorunsogo',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Irepo/Orelope/Olorunsogo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Oluyole',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Oluyole')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Ona-Ara',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Egbeda/Ona-Ara')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Orelope',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Irepo/Orelope/Olorunsogo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Ori-Ire',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ogbomosho North/Ogbomosho South/Ori-Ire')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Oyo-East',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Afijio/Atiba/Oyo East/Oyo West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Oyo-West',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Afijio/Atiba/Oyo East/Oyo West')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo Central')->value('id')
            ],
            [
                'name' => 'Saki-East',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Saki West/Saki East/Atisbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Saki-West',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Saki West/Saki East/Atisbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo North')->value('id')
            ],
            [
                'name' => 'Surulere',
                'state_id' => 30,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ogo-Oluwa/Surulere')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Oyo South')->value('id')
            ],

            // Plateau State
            [
                'name' => 'Barkin-Ladi',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Barkin Ladi/Riyom')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau North')->value('id')
            ],
            [
                'name' => 'Bassa',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jos North/Bassa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau North')->value('id')
            ],
            [
                'name' => 'Bokkos',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Mangu/Bokkos')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau Central')->value('id')
            ],
            [
                'name' => 'Jos-East',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jos South/Jos East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau North')->value('id')
            ],
            [
                'name' => 'Jos-North',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jos North/Bassa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau North')->value('id')
            ],
            [
                'name' => 'Jos-South',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jos South/Jos East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau North')->value('id')
            ],
            [
                'name' => 'Kanam',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kanam/Kanke/Pankshin')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau Central')->value('id')
            ],
            [
                'name' => 'Kanke',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kanam/Kanke/Pankshin')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau Central')->value('id')
            ],
            [
                'name' => 'Langtang-North',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Langtang North/Langtang South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau South')->value('id')
            ],
            [
                'name' => 'Langtang-South',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Langtang North/Langtang South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau South')->value('id')
            ],
            [
                'name' => 'Mangu',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Mangu/Bokkos')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau Central')->value('id')
            ],
            [
                'name' => 'Mikang',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shendam/Qua\'an Pan/Mikang')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau South')->value('id')
            ],
            [
                'name' => 'Pankshin',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kanam/Kanke/Pankshin')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau Central')->value('id')
            ],
            [
                'name' => 'Qua\'An-Pan',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shendam/Qua\'an Pan/Mikang')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau South')->value('id')
            ],
            [
                'name' => 'Riyom',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'BWearinessBarkin Ladi/Riyom')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau North')->value('id')
            ],
            [
                'name' => 'Shendam',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shendam/Qua\'an Pan/Mikang')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau South')->value('id')
            ],
            [
                'name' => 'Wase',
                'state_id' => 31,
                'constituency_id' => DB::table('constituencies')->where('name', 'Wase')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Plateau South')->value('id')
            ],

            // Rivers State
            [
                'name' => 'Abua/Odual',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abua-Odual/Ahoada East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers West')->value('id')
            ],
            [
                'name' => 'Ahoada-East',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abua-Odual/Ahoada East')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers West')->value('id')
            ],
            [
                'name' => 'Ahoada-West',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ahoada West/Ogba-Egbema-Ndoni')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers West')->value('id')
            ],
            [
                'name' => 'Akuku-Toru',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akuku-Toru/Asari-Toru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers South-East')->value('id')
            ],
            [
                'name' => 'Andoni',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Andoni/Opobo-Nkoro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers South-East')->value('id')
            ],
            [
                'name' => 'Asari-Toru',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Akuku-Toru/Asari-Toru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers South-East')->value('id')
            ],
            [
                'name' => 'Bonny',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bonny/Degema')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers South-East')->value('id')
            ],
            [
                'name' => 'Degema',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bonny/Degema')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers South-East')->value('id')
            ],
            [
                'name' => 'Eleme',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Eleme/Tai/Oyigbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Emohua',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Emohua/Ikwerre')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Etche',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Etche/Omuma')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Gokana',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Khana/Gokana')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers South-East')->value('id')
            ],
            [
                'name' => 'Ikwerre',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Emohua/Ikwerre')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Khana',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Khana/Gokana')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers South-East')->value('id')
            ],
            [
                'name' => 'Obio/Akpor',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Obio-Akpor')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Ogba/Egbema/Ndoni',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Ahoada West/Ogba-Egbema-Ndoni')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers West')->value('id')
            ],
            [
                'name' => 'Ogu/Bolo',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okrika/Ogu-Bolo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Okrika',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Okrika/Ogu-Bolo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Omumma',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Etche/Omuma')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Opobo/Nkoro',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Andoni/Opobo-Nkoro')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers South-East')->value('id')
            ],
            [
                'name' => 'Oyigbo',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Eleme/Tai/Oyigbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Port-Harcourt',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Port Harcourt')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],
            [
                'name' => 'Tai',
                'state_id' => 32,
                'constituency_id' => DB::table('constituencies')->where('name', 'Eleme/Tai/Oyigbo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Rivers East')->value('id')
            ],

            // Sokoto State
            [
                'name' => 'Binji',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Binji/Silame')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto North')->value('id')
            ],
            [
                'name' => 'Bodinga',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bodinga/Dange-Shuni/Tureta')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto South')->value('id')
            ],
            [
                'name' => 'Dange-Shuni',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bodinga/Dange-Shuni/Tureta')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto South')->value('id')
            ],
            [
                'name' => 'Gada',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gada/Goronyo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto East')->value('id')
            ],
            [
                'name' => 'Goronyo',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gada/Goronyo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto East')->value('id')
            ],
            [
                'name' => 'Gudu',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gudu/Tangaza')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto North')->value('id')
            ],
            [
                'name' => 'Gwadabawa',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gwadabawa/Illela')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto East')->value('id')
            ],
            [
                'name' => 'Illela',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gwadabawa/Illela')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto East')->value('id')
            ],
            [
                'name' => 'Isa',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Isa/Sabon-Birni')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto East')->value('id')
            ],
            [
                'name' => 'Kebbe',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Tambuwal/Kebbe')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto South')->value('id')
            ],
            [
                'name' => 'Kware',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kware/Wamakko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto North')->value('id')
            ],
            [
                'name' => 'Rabah',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Rabah/Wurno')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto East')->value('id')
            ],
            [
                'name' => 'Sabon-Birni',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Isa/Sabon-Birni')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto East')->value('id')
            ],
            [
                'name' => 'Shagari',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shagari/Yabo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto South')->value('id')
            ],
            [
                'name' => 'Silame',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Binji/Silame')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto North')->value('id')
            ],
            [
                'name' => 'Sokoto-North',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Sokoto North/Sokoto South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto North')->value('id')
            ],
            [
                'name' => 'Sokoto-South',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Sokoto North/Sokoto South')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto North')->value('id')
            ],
            [
                'name' => 'Tambuwal',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Tambuwal/Kebbe')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto South')->value('id')
            ],
            [
                'name' => 'Tangaza',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gudu/Tangaza')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto North')->value('id')
            ],
            [
                'name' => 'Tureta',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bodinga/Dange-Shuni/Tureta')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto South')->value('id')
            ],
            [
                'name' => 'Wamako',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Kware/Wamakko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto North')->value('id')
            ],
            [
                'name' => 'Wurno',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Rabah/Wurno')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto East')->value('id')
            ],
            [
                'name' => 'Yabo',
                'state_id' => 33,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shagari/Yabo')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Sokoto South')->value('id')
            ],

            // Taraba State
            [
                'name' => 'Ardo-Kola',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jalingo/Yorro/Zing')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba North')->value('id')
            ],
            [
                'name' => 'Bali',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bali/Gassol')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba Central')->value('id')
            ],
            [
                'name' => 'Donga',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Takum/Donga/Ussa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba South')->value('id')
            ],
            [
                'name' => 'Gashaka',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Sardauna/Gashaka/Kurmi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba South')->value('id')
            ],
            [
                'name' => 'Gassol',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bali/Gassol')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba Central')->value('id')
            ],
            [
                'name' => 'Ibi',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Wukari/Ibi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba South')->value('id')
            ],
            [
                'name' => 'Jalingo',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jalingo/Yorro/Zing')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba North')->value('id')
            ],
            [
                'name' => 'Karim-Lamido',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Karim-Lamido/Lau/Ardo-Kola')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba North')->value('id')
            ],
            [
                'name' => 'Kumi',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Sardauna/Gashaka/Kurmi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba South')->value('id')
            ],
            [
                'name' => 'Lau',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Karim-Lamido/Lau/Ardo-Kola')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba North')->value('id')
            ],
            [
                'name' => 'Sardauna',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Sardauna/Gashaka/Kurmi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba South')->value('id')
            ],
            [
                'name' => 'Takum',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Takum/Donga/Ussa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba South')->value('id')
            ],
            [
                'name' => 'Ussa',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Takum/Donga/Ussa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba South')->value('id')
            ],
            [
                'name' => 'Wukari',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Wukari/Ibi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba South')->value('id')
            ],
            [
                'name' => 'Yorro',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jalingo/Yorro/Zing')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba North')->value('id')
            ],
            [
                'name' => 'Zing',
                'state_id' => 34,
                'constituency_id' => DB::table('constituencies')->where('name', 'Jalingo/Yorro/Zing')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Taraba North')->value('id')
            ],

            // Yobe State
            [
                'name' => 'Bade',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bade/Jakusko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe North')->value('id')
            ],
            [
                'name' => 'Bursari',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bursari/Geidam/Yunusari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe North')->value('id')
            ],
            [
                'name' => 'Damaturu',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Damaturu/Gujba/Gulani/Tarmuwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe East')->value('id')
            ],
            [
                'name' => 'Fika',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Fika/Fune')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe South')->value('id')
            ],
            [
                'name' => 'Fune',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Fika/Fune')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe South')->value('id')
            ],
            [
                'name' => 'Geidam',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bursari/Geidam/Yunusari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe North')->value('id')
            ],
            [
                'name' => 'Gujba',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Damaturu/Gujba/Gulani/Tarmuwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe East')->value('id')
            ],
            [
                'name' => 'Gulani',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Damaturu/Gujba/Gulani/Tarmuwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe East')->value('id')
            ],
            [
                'name' => 'Jakusko',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bade/Jakusko')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe North')->value('id')
            ],
            [
                'name' => 'Karasuwa',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nguru/Machina/Karasuwa/Yusufari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe North')->value('id')
            ],
            [
                'name' => 'Machina',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nguru/Machina/Karasuwa/Yusufari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe North')->value('id')
            ],
            [
                'name' => 'Nangere',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Potiskum/Nangere')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe South')->value('id')
            ],
            [
                'name' => 'Nguru',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nguru/Machina/Karasuwa/Yusufari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe North')->value('id')
            ],
            [
                'name' => 'Potiskum',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Potiskum/Nangere')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe South')->value('id')
            ],
            [
                'name' => 'Tarmuwa',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Damaturu/Gujba/Gulani/Tarmuwa')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe East')->value('id')
            ],
            [
                'name' => 'Yunusari',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bursari/Geidam/Yunusari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe North')->value('id')
            ],
            [
                'name' => 'Yusufari',
                'state_id' => 35,
                'constituency_id' => DB::table('constituencies')->where('name', 'Nguru/Machina/Karasuwa/Yusufari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Yobe North')->value('id')
            ],

            // Zamfara State
            [
                'name' => 'Anka',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Anka/Talata-Mafara')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara West')->value('id')
            ],
            [
                'name' => 'Bakura',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bakura/Maradun')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara West')->value('id')
            ],
            [
                'name' => 'Birnin-Magaji/Kiyaw',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Birnin-Magaji/Kaura-Namoda')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara North')->value('id')
            ],
            [
                'name' => 'Bukkuyum',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bukkuyum/Gummi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara West')->value('id')
            ],
            [
                'name' => 'Bungudu',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bungudu/Maru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara Central')->value('id')
            ],
            [
                'name' => 'Gummi',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bukkuyum/Gummi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara West')->value('id')
            ],
            [
                'name' => 'Gusau',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gusau/Tsafe')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara Central')->value('id')
            ],
            [
                'name' => 'Kaura-Namoda',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Birnin-Magaji/Kaura-Namoda')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara North')->value('id')
            ],
            [
                'name' => 'Maradun',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bakura/Maradun')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara West')->value('id')
            ],
            [
                'name' => 'Maru',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Bungudu/Maru')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara Central')->value('id')
            ],
            [
                'name' => 'Shinkafi',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shinkafi/Zurmi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara North')->value('id')
            ],
            [
                'name' => 'Talata-Mafara',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Anka/Talata-Mafara')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara West')->value('id')
            ],
            [
                'name' => 'Tsafe',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Gusau/Tsafe')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara Central')->value('id')
            ],
            [
                'name' => 'Zurmi',
                'state_id' => 36,
                'constituency_id' => DB::table('constituencies')->where('name', 'Shinkafi/Zurmi')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'Zamfara North')->value('id')
            ],

            // Federal Capital Territory (FCT)
            [
                'name' => 'Abaji',
                'state_id' => 37,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abaji/Gwagwalada/Kwali/Kuje')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'FCT Senatorial District')->value('id')
            ],
            [
                'name' => 'Bwari',
                'state_id' => 37,
                'constituency_id' => DB::table('constituencies')->where('name', 'AMAC/Bwari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'FCT Senatorial District')->value('id')
            ],
            [
                'name' => 'Gwagwalada',
                'state_id' => 37,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abaji/Gwagwalada/Kwali/Kuje')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'FCT Senatorial District')->value('id')
            ],
            [
                'name' => 'Kuje',
                'state_id' => 37,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abaji/Gwagwalada/Kwali/Kuje')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'FCT Senatorial District')->value('id')
            ],
            [
                'name' => 'Kwali',
                'state_id' => 37,
                'constituency_id' => DB::table('constituencies')->where('name', 'Abaji/Gwagwalada/Kwali/Kuje')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'FCT Senatorial District')->value('id')
            ],
            [
                'name' => 'Municipal',
                'state_id' => 37,
                'constituency_id' => DB::table('constituencies')->where('name', 'AMAC/Bwari')->value('id'),
                'district_id' => DB::table('districts')->where('name', 'FCT Senatorial District')->value('id')
            ],


        ];

        foreach ($localGovernments as $lg) {
            try {
                $filteredLg = array_filter($lg, function ($value) {
                    return !is_null($value);
                });

                // dump('filteredLg: ' . json_encode($filteredLg));

                DB::statement("
					INSERT INTO local_governments (name, state_id, constituency_id, district_id)
					VALUES (?, ?, ?, ?)
					ON DUPLICATE KEY UPDATE
						constituency_id = VALUES(constituency_id),
						district_id = VALUES(district_id)
				", [
                    $filteredLg['name'] ?? null,
                    $filteredLg['state_id'] ?? null,
                    $filteredLg['constituency_id'] ?? null,
                    $filteredLg['district_id'] ?? null
                ]);

            } catch (\Exception $e) {
                Log::error('Failed to insert/update LG: ' . $e->getMessage(), $lg);
                dump('Failed to insert/update LG: ' . $e->getMessage());
            }
        }
    }
}
