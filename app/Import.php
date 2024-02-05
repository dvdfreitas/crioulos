<?php

namespace App;

use Illuminate\Support\Collection;

class Import
{    
    public static $separator = ';';

    public static function ImportWordsFromCSV($filePath) {
        $words = self::importFromCSV($filePath);
        if (self::validImport($words)) {            
            Database::insertWords($words);
        } else {
            dump($words['error']);
        }
    }
 
    public static function importFromCSV($filePath)
    {        
        $csv_content = null;
        if (($handle = fopen($filePath, 'r')) !== false) {
            
            $header = fgetcsv($handle, 0, self::$separator);
            $validHeader = self::validHeader('words', $header);            

            if ($validHeader) {                            
                $csv_content = Import::readCSV($handle, $header);                                
            } else {
                $csv_content['error'] = "Invalid header.";
            }                                
    
            fclose($handle);            
        } else {
            $csv_content['error'] = "Error opening the CSV file.";
        }
        return $csv_content;
    }

    public static function readCSV($handle, $header)
    {
        $collection = new Collection();
                
        foreach ($header as $column) {
            $lc_collection = new Collection();
            $collection->put($column, $lc_collection);
        }        

        while (($row = fgetcsv($handle, 0, self::$separator)) !== false) {                    
            foreach ($row as $key => $value) {                
                $collection->get($header[$key])->push($value);
            }
        }

        return $collection;
    }


    public static function validHeader($type, $header)
    {
        $validHeader = false;
        if ($type = 'words') 
            $validHeader = self::validHeaderOfWords($header);
        
        return $validHeader;
    }

    public static function validHeaderOfWords($header)
    {
        $validHeader = true;
        foreach ($header as $language_code) {
            if (Language::supportedLanguage($language_code) == false) {
                $validHeader = false;
                break;
            }
        }
        
        return $validHeader;
    }

    public static function validImport($content) {
        if (isset($content['error'])) {
            return false;
        } else {
            return true;
        }
    }

}