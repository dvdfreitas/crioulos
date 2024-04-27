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
        // Truncate Words
        //DB::table('words')->truncate();
        $import = new Import();
        $file = $import->import('/home/dfreitas/www/crioulos/csv/pt-pov-small.csv');
        dd($file);
    }
}
