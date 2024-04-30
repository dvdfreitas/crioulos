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
        $import->importSentences('/home/dfreitas/www/crioulos/csv/frases-por.csv');        
        $import->importSentences('/home/dfreitas/www/crioulos/csv/frases-pov.csv');        
    }
}
