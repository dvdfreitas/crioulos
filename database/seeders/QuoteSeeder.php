<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quotes = [
            // Crioulo e Português
            [
                'quote' => 'Não há nada que nos possa fazer sentir tão nós mesmos como a nossa língua materna',
                'author' => 'Jorge Carlos Fonseca',
                'description' => 'Presidente da República de Cabo Verde entre 2011 e 2021',
                'image' => 'jorge_carlos_fonseca.jpg'
            ],
            // Crioulo e Português
            [
                'quote' => 'A cultura é a verdadeira base do movimento de libertação',
                'author' => 'Amílcar Cabral',
            ],
            // Crioulo e Português
            [
                'quote' => 'As únicas sociedades que podem mobilizar-se, organizar-se e lutar contra o domínio estrangeiro são as que preservam a sua cultura',
                'author' => 'Amílcar Cabral',
            ]
            // Crioulo e Português
            [
                'quote' => 'A língua portuguesa é uma das melhores coisas que os portugueses nos deixaram, porque a língua não é senão um instrumento par os homens se relacionarem uns com os outros, um meio para exprimirem as realidades da vida e do mundo',
                'author' => 'Amílcar Cabral',
            ]
        ];

        foreach ($quotes as $quote) {
            \App\Models\Quote::create($quote);
        }

    }
}
