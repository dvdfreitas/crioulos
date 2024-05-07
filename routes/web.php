<?php

use App\Http\Controllers\LanguageCodeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ReferenceController;
use App\Import;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/language_codes', [LanguageCodeController::class, 'index'])->name('language_codes.index');

Route::get('/references', [ReferenceController::class, 'index'])->name('references.index');

Route::get('/people', [PersonController::class, 'index'])->name('people.index');

Route::get('/history', function () {
    return view('history.index');
})->name('history.index');


Route::get('/history/notion_origins', function () {
    return view('history.notion_origins');
})->name('history.notion_origins');

Route::get('/history/types', function () {
    return view('history.types');
})->name('history.types');

Route::get('/history/peoplem', function () {
    return view('history.peoplem');
})->name('history-peoplem');

Route::get('/history/people/amilcar_cabral', function () {
    return view('history.people.amilcar_cabral');
})->name('history-people-amilcar');

Route::get('/history/people/luis_romano', function () {
    return view('history.people.luis_romano');
})->name('history-people-luis');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

