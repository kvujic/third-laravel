<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // index.blade.phpを呼び出す
    public function index()
    {
        return view('index');
    }
}
