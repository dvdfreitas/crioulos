<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        // https://en.wikipedia.org/wiki/Portuguese-based_creole_languages
        
        DB::table('language_codes')->insert([
            'code' => 'kea',
            'name' => 'Crioulo cabo-verdiano',
        ]);

        DB::table('language_codes')->insert([
            'code' => 'pov',
            'name' => 'Crioulo guineense',
        ]);

        DB::table('language_codes')->insert([
            'code' => 'pap',
            'name' => 'Papiamento',
        ]);

        DB::table('language_codes')->insert([
            'code' => 'aoa',
            'name' => 'Angolar',
        ]);

        // 
        DB::table('language_codes')->insert([
            'code' => 'fab',
            'name' => 'Annobonese Creole',
            'description' => 'Bla bla',            
        ]);
                
    }
}
