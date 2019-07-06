<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fareController extends Controller
{
    public function showFair(){
        return view('front.fare.fare-info');
    }

    public function getFair(Request $request){

    $startPoint= $request->start_point;
    $endPoint= $request->end_point;
    $distance= $request->distance;
    $autoNumber= $request->number_of_auto;
    $price=$distance*$autoNumber*8;

    return redirect('/fare')->with('price',"$price TK");

    }
}
