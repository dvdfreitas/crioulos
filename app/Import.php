<?php

namespace App;

use App\Models\Word;
use Illuminate\Support\Facades\DB;

class Import {

    public function import(String $path) {
        $file = fopen($path, 'r');
        $header = fgetcsv($file, 0, ";");
        $ids = [];

        foreach ($header as $language_code) {
            print_r($language_code);
            $language = DB::table('language_codes')->where('code', $language_code)->first();
            if (!$language) {
                throw new \Exception("Language not found: $language_code");
            }
            $ids[] = $language->id;
        }                

        while ($row = fgetcsv($file, 0, ";")) {            
            
            foreach ($header as $index => $language_code) {                
                $insertedWord = DB::table('words')->insertOrIgnore([
                    'text' => $row[$index],
                    'language_code_id' => $ids[$index],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                
                if (!$insertedWord) {
                    $existingWord = DB::table('words')
                        ->where('text', $row[$index])
                        ->where('language_code_id', $ids[$index])
                        ->first();
                }
                
            }
        }
        fclose($file);
        return true;
    }
}