<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public static function showAll() {

        return view('tests', ['tests' => Tests::all()]);

    }

    public static function show($id) {

        $test = Tests::where('id', $id)->get()[0];
        
        return view('test', [
            'name' => $test->name, 
            'questions' => json_decode($test->questions, true), 
            'answers' => json_decode($test->answers, true),
            'id' => $id,
        ]);

    }

    public static function check(Request $r) {

        dd($r);

        

    

    }

}
