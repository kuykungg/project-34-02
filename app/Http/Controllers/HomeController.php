<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('dashboard.index');
    }

    public function product()
    {
        return view('dashboard.index');
    }

}
