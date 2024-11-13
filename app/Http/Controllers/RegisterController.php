<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public static function store(Request $r) {

        dd($r->toArray());
        User::create($r->toArray());


    }
}
