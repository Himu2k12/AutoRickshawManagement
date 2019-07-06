<?php

namespace App\Http\Controllers;

use App\Auto;
use Illuminate\Http\Request;

class addAutoController extends Controller
{
    public function ViewAddAutos(){
        return view('admin.Auto.add-auto-info');
    }
    public function addAutoInfo(Request $request){
        $autos=new Auto();
        $autos->licence_no=$request->licence_no;
        $autos->auto_no=$request->auto_no;
        $autos->include_date=$request->include_date;
        $autos->condition=$request->condition;
        $autos->estimated_milage=$request->estimated_milage;
        $autos->additional_description=$request->additional_description;
        $autos->repair_details=$request->repair_details;
        $autos->on_service=$request->on_service;
        $autos->save();

        return redirect('/manage-auto')->with('message','New Auto Info Added Successfully');
    }

    public function manageAuto() {
//        $autos = Auto::all();
        $autos = Auto::orderBy('id', 'DESC')->get();

        return view('admin.Auto.manage-auto', ['autos'=>$autos]);
    }
    public function serviceOff($id){
        $autosById = Auto::find($id);
        $autosById->on_service= 0;
        $autosById->save();
        return redirect('/manage-auto')->with('message', 'Auto is stopped for booking');
    }

    public function serviceOn($id){
        $autosById = Auto::find($id);
        $autosById->on_service= 1;
        $autosById->save();
        return redirect('/manage-auto')->with('message', 'Auto is available for booking');
    }
    public function editAutoInfo($id) {
        //$categoryById = Category::where('id', $id)->first();

        $autoInfoById = Auto::find($id);
        return view('admin.Auto.edit-auto-info', ['autoInfoById'=>$autoInfoById]);
    }
    public function updateAutoInfo(Request $request){
        $autos = Auto::find($request->auto_id);
        $autos->licence_no=$request->licence_no;
        $autos->auto_no=$request->auto_no;
        $autos->include_date=$request->include_date;
        $autos->condition=$request->condition;
        $autos->estimated_milage=$request->estimated_milage;
        $autos->additional_description=$request->additional_description;
        $autos->repair_details=$request->repair_details;
        $autos->on_service=$request->on_service;
        $autos->save();

        return redirect('/manage-auto')->with('message',' Auto Info Updated Successfully');
    }
}
