<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Request;

class SessionController extends Controller
{
    public static function store(RegisterRequest $r) {
        dd($r->validated());
        
    }
}
