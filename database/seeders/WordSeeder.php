<?php

namespace Database\Seeders;

use App\Import;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        DB::table('words')->truncate();
        $import = new Import();
        $import->importTranslations(env('CSV_FOLDER') . 'por-pov.csv');        
    }
}
