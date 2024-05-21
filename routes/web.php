<?php

use App\Http\Controllers\VerbsController;
use App\Http\Controllers\WordsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/test/{id}', function ($id) {
    return view('test', ['test_id' => $id]);
});
Route::get('/search/{query}', function (Request $r, $query) {

    $result = WordsController::search($r, $query);
    
    return view('search-response', ['words' => $result['words'],  'words_all' => $result['words_all'], 
    'query' => $query, 'parameter' => $result['page'], 'words_number' => $result['words_number'] ]);

});

Route::get('/verbs/{verb}', function (Request $r, $verb) {

    $conjugate = VerbsController::conjugate($verb) ?? null;
    return view('verb-conjugate', ['verbs' => $conjugate]);

});

Route::view('/', 'home');
Route::view('/tests', 'tests');
Route::view('/more', 'more');
Route::view('/verbs', 'verb-conjugate')->name('verbs');



