<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLogin;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function showLogin(){
        return view('front.login.login-reg-form');
    }

    public function registrationUser(Request $request){

        $userlogin= new UserLogin();
        $userlogin->name=$request->name;
        $userlogin->address=$request->address;
        $userlogin->post_code=$request->post_code;
        $userlogin->gender=$request->gender;
        $userlogin->email=$request->email;
        $userlogin->password=$request->password;
        $userlogin->save();

        Session::put('name',$userlogin->name);
        Session::put('email',$userlogin->email);
        return redirect('/booking')->with('message','You are Successfully registered!!');
    }
    public function CheckLogin(Request $request){
        $userLogin=UserLogin::where('email',$request->email)->where('password',$request->password)->first();
       if($userLogin){
           Session::put('name',$userLogin->name);
           Session::put('email',$userLogin->email);
//           dd(Session::get('name'));
//           //Session::put('name');
//           echo "registered";
           return redirect('/booking');
       }else{
           return redirect('/login-user');
       }


    }
    public function checkOut(){
        Session::forget('name');
        Session::forget('email');
        return redirect('/');
    }
}
