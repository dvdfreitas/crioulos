<?php

namespace App;

use App\Models\Word;

class Database {
    public static function insertWords($words) {                
        foreach ($words->keys() as $language_code) {                        
            if (Language::supportedLanguage($language_code)) {
                foreach ($words[$language_code]->unique() as $word) {                                        
                    Word::create(['language_code' => $language_code, 'text' => $word]);
                }
            }                        
        }
    }
}