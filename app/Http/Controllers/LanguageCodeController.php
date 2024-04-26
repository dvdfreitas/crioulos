<?php

namespace App\Http\Controllers;

use App\Models\LanguageCode;
use Illuminate\Http\Request;

class LanguageCodeController extends Controller
{    
    public function index()
    {
        $language_codes = LanguageCode::all();
        return view('language_codes.index', compact('language_codes'));
    }
}
