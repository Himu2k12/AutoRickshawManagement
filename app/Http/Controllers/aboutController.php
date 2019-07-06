<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function showAbout(){
        $staffs=Staff::where('duty_category',1)->orderBy('id','desc')->take(6)->get();
        return view('front.about.about-content',['staffs'=>$staffs]);
    }
}
