<?php

use App\Http\Controllers\WordsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/test/{id}', function ($id) {
    return view('test', ['test_id' => $id]);
});
Route::get('/search/{query}', function (Request $r, $query) {

    $page = $r->query('page');

    $searchResult = WordsController::search($query, $page);
    return view('search-response', ['words' => $searchResult['words'], 
        'wordsAll' => $searchResult['wordsAll'], 'query' => $query, 'parameter' => $page ]);

});

Route::view('/', 'home');
Route::view('/tests', 'tests');
Route::view('/more', 'more');
Route::view('/verbs', 'verb-conjugate')->name('verbs');



