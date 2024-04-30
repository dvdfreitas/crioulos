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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

