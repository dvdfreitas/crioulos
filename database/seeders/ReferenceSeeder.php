<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('references')->truncate();

        DB::table('references')->insert([
            'title' => 'Dicionário Bilíngue Português - Crioulo de Guiné-Bissau',
            'subtitle' => 'Volume 1',
            'author' => 'Cirineu Cecote Stein',            
            'url' => 'http://www.editora.ufpb.br/sistema/press5/index.php/UFPB/catalog/book/704',
            'image' => 'dicio1.jpg',
        ]);

        DB::table('references')->insert([
            'title' => 'Dicionário Bilíngue Português - Crioulo de Guiné-Bissau',
            'subtitle' => 'Volume 2',
            'author' => 'Cirineu Cecote Stein',            
            'url' => 'http://www.editora.ufpb.br/sistema/press5/index.php/UFPB/catalog/book/704',
            'image' => 'dicio2.jpg',
        ]);
    }
}
