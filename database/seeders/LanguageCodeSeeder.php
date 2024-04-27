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
            'description' => 'O crioulo cabo-verdiano é uma língua nascida no coração do Arquipélago de Cabo Verde que floresceu para se tornar a expressão mais autêntica e íntima da identidade cabo-verdiana. É o idioma materno de praticamente todos os cabo-verdianos, enraizado nas tradições e nas histórias que moldaram a cultura do país.',
        ]);

        DB::table('language_codes')->insert([
            'code' => 'pov',
            'name' => 'Crioulo bissau-guineense',
            'description' => 'O crioulo bissau-guineense é a língua franca de aproximadamente 60% da população de Guiné-Bissau, sendo amplamente falado também no Senegal, onde é conhecido como crioulo de Casamansa. Em 2019, cerca de 232 mil pessoas na Guiné-Bissau o utilizavam como primeira língua, e mais 600 mil como segunda língua.',
        ]);

        DB::table('language_codes')->insert([
            'code' => 'pap',
            'name' => 'Papiamento',
            'description' => 'O papiamento é uma língua crioula falada no Caribe Neerlandês, especialmente nas ilhas ABC (Aruba, Bonaire e Curaçau). É a língua mais falada nessas ilhas, com status oficial em Aruba e Curaçau. Além disso, o papiamento é reconhecido como língua nos órgãos públicos neerlandeses de Bonaire, Santo Eustáquio e Saba.',
        ]);

        DB::table('language_codes')->insert([
            'code' => 'aoa',
            'name' => 'Angolar',
            'description' => 'O angolar é uma das línguas nacionais de São Tomé e Príncipe. É falado principalmente na ponta sul da ilha de São Tomé, especialmente na região em torno da vila de São João dos Angolares, localizada no distrito de Caué. É empregado por 6% da população do país.',
        ]);

        DB::table('language_codes')->insert([
            'code' => 'fab',
            'name' => 'Anobonese',
            'description' => 'O anobonense ou crioulo de Ano-Bom é uma língua crioula de base portuguesa falada por cerca de 5600 a 6600 falantes, sendo aproximadamente 6000 nativos da ilha de Ano-Bom, província da Guiné Equatorial. Ainda que a maior parte dos falantes da língua saibam ler e escrever, por muito tempo a língua não foi escrita, apenas falada.',            
        ]);

        DB::table('language_codes')->insert([
            'code' => 'srm',
            'name' => 'Saramacano',
            'description' => 'O saramacano é uma língua crioula que tem sua base lexical no inglês e no português. É falada ao longo dos rios Saramaca e Suriname por aproximadamente 50.000 indivíduos das tribos saramacana e matawai, dois dos seis povos quilombolas do Suriname. No entanto, atualmente, a língua é considerada vulnerável devido ao risco de desaparecimento.',            
        ]);

        DB::table('language_codes')->insert([
            'code' => 'pre',
            'name' => 'Principense',
            'description' => 'O principense, também conhecido como lunguyè, é uma língua nacional de São Tomé e Príncipe, falada especificamente na ilha do Príncipe. "Lunguyè" significa "língua da ilha". Atualmente é considerado uma língua ameaçada de extinção, sendo predominantemente falada por idosos, muitos dos quais também são fluentes em português e/ou são-tomense.',            
        ]);

        DB::table('language_codes')->insert([
            'code' => 'cri',
            'name' => 'São-tomense',
            'description' => 'O são-tomense, também chamado de santomense ou forro, é uma língua nacional de São Tomé e Príncipe, amplamente falada em toda a ilha de São Tomé, exceto na região sul. É a língua predominante para comunicação social em praticamente toda a ilha de São Tomé, originada inicialmente entre os escravos libertos, conhecidos como forros.',            
        ]);
                
    }
}
