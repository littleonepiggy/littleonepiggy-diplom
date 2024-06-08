<?php

use App\Http\Controllers\WordsController;
use App\Http\Controllers\VerbsController;
use App\Http\Controllers\AdjectivesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/search/{query}', function (Request $r, $q) {

    $result = WordsController::search($r, $q);
    
    return view('search-response', ['words' => $result['words'],  'words_all' => $result['words_all'], 
    'query' => $q, 'parameter' => $result['page'], 'words_number' => $result['words_number'] ]);

});

Route::get('/verbs/{verb}', function (Request $r, $verb) {

    $conjugate = VerbsController::conjugate($verb) ?? null;
    return view('verb-conjugate', ['verbs' => $conjugate]);

});
Route::get('/adjectives/{adjective}', function (Request $r, $adjective) {

    $decline = AdjectivesController::decline($adjective) ?? null;
    return view('adjective-decline', ['adjectives' => $decline]);

});

Route::middleware('auth')->group(function() {

    
});

Route::view('/profile', 'user-profile')->name('profile');
Route::middleware('guest')->group(function() {

    Route::view('/register', 'register')->name('register');
    Route::post('/register', [SessionController::class, 'store'])->name('register.store');

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);

});

Route::get('/test/{id}', function ($id) { return view('test', ['test_id' => $id]); });

Route::view('/', 'home');
Route::view('/tests', 'tests')->name('tests');
Route::view('/more', 'more')->name('more');
Route::view('/verbs', 'verb-conjugate')->name('verbs');



