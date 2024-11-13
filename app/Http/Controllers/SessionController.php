<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SessionController extends Controller
{
    public static function store(HttpRequest $r) {

        User::create($r->toArray());

        return Redirect::route('login');
        
        
    }

    public static function auth(HttpRequest $r) {

        Auth::attempt($r->only(['login', 'password']));

        return Redirect::route('/');

    }

    public static function logout() {

        Auth::logout();

        return Redirect::route('/');

    }

 
}

