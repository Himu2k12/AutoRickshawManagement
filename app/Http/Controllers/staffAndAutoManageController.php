<?php

namespace App\Http\Controllers;

use App\Auto;
use App\Staff;
use App\StaffOnAuto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class staffAndAutoManageController extends Controller
{
    public function appointStaffOnAuto(){
        $autos=Auto::all();
        $staffs=Staff::all();
        return view('admin.staffOnAuto.staff_in_autos',['autos'=>$autos,
                                                            'staffs'=>$staffs
        ]);
    }
    public function newWorkingRecord(Request $request){
        $staffOnAuto=new StaffOnAuto();
        $staffOnAuto->staff_id=$request->staff_id;
        $staffOnAuto->auto_id=$request->auto_id;
        $staffOnAuto->appoint_date=$request->appoint_date;
        $staffOnAuto->dismisal_date=$request->dismisal_date;
        $staffOnAuto->save();
        return redirect('/edit-auto-staff')->with('message','New Auto Info Added Successfully');
    }
    public function editAutoOnStaff(){
        $staffOnAutos=DB::table('staff_on_autos')
            ->join('staff','staff_on_autos.staff_id','=','staff.id')
            ->join('autos','autos.id','=','staff_on_autos.auto_id')
            ->select('staff_on_autos.*','staff.staff_name','autos.auto_no')
            ->get();


       return view('admin.staffOnAuto.edit_auto_staff',['staffOnAutos'=>$staffOnAutos]);
    }
    public function dismisalDate(Request $request){
        $id=$request->id;
        $staffOnAuto=StaffOnAuto::find($id);
        $staffOnAuto->dismisal_date=$request->dismisal_date;
        $staffOnAuto->save();
        return redirect('/edit-auto-staff')->with('message','Data saved Successfully');
    }
}
