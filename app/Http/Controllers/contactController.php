<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function showController(){
        return view('front.contact.contact-content');
    }

}
