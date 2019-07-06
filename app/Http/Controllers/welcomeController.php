<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function showIndex()
    {
        return view('front.home.home-content');
    }
}
