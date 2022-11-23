<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class socialController extends Controller
{
    function index()
    {
        return view('dashboard');
    }

    function login()
    {
        return view('login');
    }
    function signup()
    {
        return view('signup');
    }
}
