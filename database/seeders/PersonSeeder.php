<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        DB::table('people')->truncate();

        DB::table('people')->insert([
            'name' => 'David Freitas',
            'email' => 'dvdfreitas@gmail.com',
            'image' => 'dvdfreitas.jpg',
            'facebook' => 'dvdfreitas',
            'instagram' => 'dvdctfreitas',
            'linkedin' => 'dvdfreitas',
            'homepage' => 'https://ambulanceforhearts.pt/davidfreitas',
            'description' => 'Criador da plataforma e voluntário na ONGD "Na Rota dos Povos"'
        ]);
    }
}
