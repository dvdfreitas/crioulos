<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stories')->delete();

        DB::table('stories')->insert([
            'title' => 'The First Story',
            'subtitle' => 'The first story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the first story summary',
            'date' => '2024-02-22',
            'url' => 'https://example.com/first-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Second Story',
            'subtitle' => 'The second story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the second story summary',
            'date' => '2024-02-23',
            'url' => 'https://example.com/second-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Third Story',            
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the third story summary',
            'date' => '2024-02-24',
            'url' => 'https://example.com/third-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Fourth Story',
            'subtitle' => 'The fourth story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the fourth story summary',
            'date' => '2024-02-25',
            'url' => 'https://example.com/fourth-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Fifth Story',
            'subtitle' => 'The fifth story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the fifth story summary',
            'date' => '2024-02-26',
            'url' => 'https://example.com/fifth-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Sixth Story',
            'subtitle' => 'The sixth story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the sixth story summary',
            'date' => '2024-02-27',
            'url' => 'https://example.com/sixth-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The First Story',
            'subtitle' => 'The first story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the first story summary',
            'date' => '2024-02-22',
            'url' => 'https://example.com/first-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Second Story',
            'subtitle' => 'The second story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the second story summary',
            'date' => '2024-02-23',
            'url' => 'https://example.com/second-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Third Story',            
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the third story summary',
            'date' => '2024-02-24',
            'url' => 'https://example.com/third-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Fourth Story',
            'subtitle' => 'The fourth story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the fourth story summary',
            'date' => '2024-02-25',
            'url' => 'https://example.com/fourth-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Fifth Story',
            'subtitle' => 'The fifth story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the fifth story summary',
            'date' => '2024-02-26',
            'url' => 'https://example.com/fifth-story',
        ]);

        DB::table('stories')->insert([
            'title' => 'The Sixth Story',
            'subtitle' => 'The sixth story subtitle',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'type' => 'story',
            'summary' => 'This is the sixth story summary',
            'date' => '2024-02-27',
            'url' => 'https://example.com/sixth-story',
        ]);

    }
}
