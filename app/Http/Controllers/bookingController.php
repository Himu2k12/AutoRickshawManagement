<?php

namespace App\Http\Controllers;

use App\Auto;
use App\AutosOnBooking;
use App\Book;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class bookingController extends Controller
{
    public function showForm(){
        return view('front.booking.booking-form');
    }
    public function showMap(){
        return view('front.google.google-map');
    }

    public function saveBookingInfo(Request $request){
        Session::put('selected_city',$request->selected_city);
        Session::put('trip',$request->trip);
        Session::put('start_point',$request->start_point);
        Session::put('end_point',$request->end_point);
        Session::put('mobile_number',$request->mobile_number);
        Session::put('hour',$request->hour);
        Session::put('min',$request->min);
        Session::put('am_pm',$request->am_pm);
        Session::put('short_description',$request->short_description);

        $this->validate($request, [
            'selected_city' => 'required|',
            'trip' => 'required|',
            'start_point' => 'required',
            'end_point' => 'required',
            'pick_up_time' => 'required',
            'hour' => 'required',
            'min' => 'required',
            'mobile_number' => 'required|size:11|regex:/(01)[0-9]{9}/',
            'short_description' => 'required'
        ]);
    if(Session::get('name')) {
        $bookings = new Book();
        $bookings->selected_city = $request->selected_city;
        $trip = $request->trip;
        $bookings->trip = $request->trip;
        $bookings->start_point = $request->start_point;
        $bookings->end_point = $request->end_point;
        $distance = $request->distance;
        $bookings->distance = $request->distance;
        $bookings->pick_up_time = $request->pick_up_time;
        $bookings->hour = $request->hour;
        $bookings->min = $request->min;
        $bookings->am_pm = $request->am_pm;
        $bookings->mobile_number = $request->mobile_number;
        $numOfauto = $request->number_of_auto;
        $bookings->number_of_auto = $request->number_of_auto;
        $bookings->short_description = $request->short_description;
        $fare = $trip * $distance * $numOfauto;
        $bookings->fare = $fare;
        $date = date("Y-m-d h:i:sa");
        $bookings->booking_time = $date;
        $bookings->save();
        Mail::send(['text'=>'front.booking.boucher'],['Name'=>'AMS'],function ($message){
            $email=Session::get('email');
            $message->to($email)->subject('Confimation of Booking');
            $message->from('thoreshdutta@gmail.com','AMS');
        });

        $request->session()->forget('selected_city');
        $request->session()->forget('trip');
        $request->session()->forget('start_point');
        $request->session()->forget('end_point');
        $request->session()->forget('hour');
        $request->session()->forget('min');
        $request->session()->forget('am_pm');
        $request->session()->forget('mobile_number');
        $request->session()->forget('number_of_auto');
        $request->session()->forget('short_description');

        return redirect('/booking')->with('confirm','You have Successfully booked Your auto!!A confirmation mail has been send to your mail');
    }else{
        return redirect('/login-user')->with('login','PLease login Before Booking!!');
    }




    }
    public function manageBooking() {

        $manageBookings =Book::orderBy('id', 'DESC')->get();
        $showAutos=AutosOnBooking::all();
        $serviceOnAutos=Auto::where('on_service',1)->get();
        return view('admin.booking.manage-booking', ['manageBookings'=>$manageBookings,
                                                            'serviceOnAutos'=>$serviceOnAutos,
                                                                'showAutos'=>$showAutos

        ]);
    }
    public function addAutoOnBooking(Request $request){

        $selectedAutos=$request->select_auto;
        $aid=$request->aid;
        foreach ($selectedAutos as $selectedAuto){
            $autosOnBooking=new AutosOnBooking();
            $autosOnBooking->booking_id=$request->booking_id;
            $autosOnBooking->auto_no=$selectedAuto;
            $autosOnBooking->save();
            $autosById = Auto::where('auto_no',$selectedAuto)->first();
            $autosById->on_service= 0;
            $autosById->save();
        }
        DB::table('books')
            ->where('id', $aid)
            ->update(['auto_no' => 1]);



        $bookauto=Book::find($request->booking_id)->first();
        $bookauto->auto_no=1;
        $bookauto->save();
        return redirect('/manage-booking')->with('message','Autos Against Booking successfully given!!');
        
    }
    public function showBookingDetails(){
            $autosOnBooks=AutosOnBooking::all();

        return view('admin.booking.View-autos-on-booking',['autosOnBooks'=>$autosOnBooks]);
    }
}
