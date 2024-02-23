<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Database;
use App\Import;
use App\Models\User;
use App\Models\Word;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'David Freitas',
        //     'email' => 'dvdfreitas@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        // DB::table('words')->delete();
        // Import::importWordsFromCSV('/home/dfreitas/www/crioulos/csv/words.csv');
        
        $this->call([
            StorySeeder::class,
            TranslationSeeder::class,
        ]);

        
    }
}
