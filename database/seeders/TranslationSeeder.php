<?php

namespace Database\Seeders;

use App\Import;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Import::translationsFromCSV('/home/dfreitas/www/crioulos/csv/translations.csv');
    }
}
