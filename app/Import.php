<?php

namespace App;

use App\Models\Sentence;
use App\Models\Word;
use Illuminate\Support\Facades\DB;

class Import {

    public function importTranslations(String $path) {
        $file = fopen($path, 'r');
        $header = fgetcsv($file, 0, ";");
        $ids = $this->languageCodesToIds($header);  
                        
        while ($row = fgetcsv($file, 0, ";")) {            
            $translations_id = [];
            foreach ($header as $index => $language_code) {                
                $word = Word::where('text', $row[$index])
                        ->where('language_code_id', $ids[$index])
                        ->first();
                if (!$word) {
                    $word_id = DB::table('words')->insertGetId([
                        'text' => $row[$index],
                        'language_code_id' => $ids[$index],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);                
                } else {
                    $word_id = $word->id;
                }                                                                                   
                $translations_id[] = $word_id;
            }

            for ($i = 1; $i < count($translations_id); $i++) {
                DB::table('translations')->insertOrIgnore([
                    'source_id' => $translations_id[0],
                    'target_id' => $translations_id[$i],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        fclose($file);
        return true;
    }

    public function importSentences(String $path) {
        $file = fopen($path, 'r');
        $header = fgetcsv($file, 0, ";");
        $ids = $this->languageCodesToIds($header);

        while ($row = fgetcsv($file, 0, ";")) {            
            foreach ($header as $index => $language_code) {                
                $sentence = Sentence::where('text', $row[$index])
                            ->where('language_code_id', $ids[$index])
                            ->first();
                if (!$sentence) {
                    $sentence_id = DB::table('sentences')->insertGetId([
                        'text' => $row[$index],
                        'language_code_id' => $ids[$index],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }            
            }
        }                                           
    }

    public function languageCodesToIds(array $header) {
        
        $ids = [];
        foreach ($header as $language_code) {
            $language = DB::table('language_codes')->where('code', $language_code)->first();
            if (!$language) {
                throw new \Exception("Language not found: $language_code");
            }
            $ids[] = $language->id;
        }
        return $ids;
    }
}