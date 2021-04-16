<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function table()
    {
        return view('table');
    }

    public function colors()
    {
        return view('colors');
    }
}
