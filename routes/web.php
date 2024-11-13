<?php

use App\Http\Controllers\WordsController;
use App\Http\Controllers\VerbsController;
use App\Http\Controllers\AdjectivesController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/search/{query}', function (Request $r, $q) {

    $words = WordsController::search($r, $q);

    return view('search-response', [
        'words' => $words
    ]);


})->name('search');

Route::get('/verbs/{verb}', function (Request $r, $verb) {

    $conjugate = VerbsController::conjugate($verb) ?? null;

    if ($conjugate == null) {
        return view('verb-conjugate');
    }

    if (array_key_exists('err', $conjugate)) {
        return view('verb-conjugate', ['err' => $conjugate]);
    }

    return view('verb-conjugate', ['verbs' => $conjugate]);

});

Route::get('/adjectives/{adjective}', function (Request $r, $adjective) {

    $conjugate = AdjectivesController::conjugate($adjective) ?? null;
    
    if ($conjugate != null) {

        if (array_key_exists('err', $conjugate)) {

            return view('adjective-conjugate', ['err' => $conjugate]);

        }

        return view('adjective-conjugate', ['adjectives' => $conjugate]);

    } 

    return view('adjective-conjugate');

});




Route::middleware('guest')->group(function() {

    Route::view('/register', 'register')->name('register');
    Route::post('/register', [SessionController::class, 'store'])->name('register.store');

    Route::view('/login', 'login')->name('login');
    Route::post('/login', [SessionController::class, 'auth'])->name('login.auth');

});


Route::middleware('auth')->group(function() {

    Route::get('/profile', [UserController::class, 'show'])->name('profile');
    Route::get("/logout", [SessionController::class, 'logout'])->name("logout");

});

Route::view('/', 'home')->name('/');
Route::view('/more', 'more')->name('more');
Route::view('/verbs', 'verb-conjugate')->name('verbs');
Route::view('/adjectives', 'adjective-conjugate')->name('adjectives');



