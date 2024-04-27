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
            'id' => 1,
            'code' => 'por',
            'name' => 'Português',            
        ]);

        DB::table('language_codes')->insert([
            'id' => 2,
            'code' => 'pov',
            'name' => 'Crioulo guineense',
        ]);

        DB::table('language_codes')->insert([
            'code' => 'kea',
            'name' => 'Crioulo cabo-verdiano',
            'description' => 'O crioulo cabo-verdiano é uma língua nascida no coração do Arquipélago de Cabo Verde que floresceu para se tornar a expressão mais autêntica e íntima da identidade cabo-verdiana. É o idioma materno de praticamente todos os cabo-verdianos, enraizado nas tradições e nas histórias que moldaram a cultura do país.',
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
