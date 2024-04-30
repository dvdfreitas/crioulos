<?php

namespace Database\Seeders;

use App\Import;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SentenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sentences')->truncate();
        $import = new Import();
        $import->importSentences(env('CSV_FOLDER') . 'frases-por.csv');        
        $import->importSentences(env('CSV_FOLDER') . 'frases-pov.csv');        
    }
}
