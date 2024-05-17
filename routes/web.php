<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/test/{id}', function ($id) {
    return view('test', ['test_id' => $id]);
});

Route::get('/tests', function() {
    return view('tests');
});

Route::get('/more', function () {
    return view('more');
});

Route::get('/search/{query}', function (Request $r, $query) {

    return view('search_response', ['search_response' => $query]);

});

