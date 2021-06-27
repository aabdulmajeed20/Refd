<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showLogin()
    {
        return view('Endowments.login');
    }

    public function showRegister()
    {
        return view('Home.register');
    }
}
