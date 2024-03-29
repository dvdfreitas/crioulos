<?php

use App\Import;
use App\Models\Sentence;
use App\Models\Word;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/words', function () {
    $words = Word::paginate(100);
    return view('words.index', compact(['words']));    
});

Route::get('/sentences', function () {
    $sentences = Sentence::all();
    return view('sentences.index', compact(['sentences']));    
});


Route::get('/lexicon/create', function () {        
    return view('lexicon.create');    
});

Route::get('/words/create', function () {
    $words = Word::paginate(100);
    return view('words.index', compact(['words']));    
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
