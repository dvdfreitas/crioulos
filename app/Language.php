<?php

namespace App;

class Language
{    
    
    protected static $supported_languages = ['por', 'pov'];

    public static function flag($language_code) {
        if ($language_code == 'por')
            return '🇵🇹';
        elseif ($language_code == 'pov') 
            return '🇬🇼'; 
    }

    public static function supportedLanguage($language_code) {
        return in_array($language_code, self::$supported_languages);
    }
}