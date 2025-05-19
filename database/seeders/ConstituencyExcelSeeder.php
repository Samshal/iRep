<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ConstituencyImport;

class ConstituencyExcelSeeder extends Seeder
{
    public function run(): void
    {
        Excel::import(new ConstituencyImport(), storage_path('app/constituencies.xlsx'));
    }
}
