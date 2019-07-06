<?php

namespace App\Http\Controllers;

use App\Staff;
use App\User;
use Illuminate\Http\Request;

class staffController extends Controller
{
    public function addStaff(){
        return view('admin.staff.add-staff');
    }

    public function addStaffInfo(Request $request){
        $staffImage = $request->file('staff_image');
        $imageName = $staffImage->getClientOriginalName();
        $directory = 'staff-images/';
        $staffImage->move($directory,$imageName);
        $imgUrl = $directory.$imageName;

        $staff=new Staff();
        $staff->staff_name=$request->staff_name;
        $staff->mobile_number=$request->mobile_number;
        $staff->age=$request->age;
        $staff->join_date=$request->join_date;
        $staff->licence_number=$request->licence_number;
        $staff->salary=$request->salary;
        $staff->address=$request->address;
        $staff->staff_image=$imgUrl;
        $staff->duty_category=$request->duty_category;
        $staff->save();


        return redirect('/manage-staff')->with('message','Staff Info Added successfully');

    }
    public function manageStaffInfo() {
        $Staffs = Staff::all();
        return view('admin.staff.manage-staff-info', ['Staffs'=>$Staffs]);
    }
    public function dutyOff($id){
        $staffById = Staff::find($id);
        $staffById->duty_category= 0;
        $staffById->save();
        return redirect('/manage-staff')->with('message', 'Staff duty Turned Off');
    }

    public function dutyOn($id){
        $staffById = Staff::find($id);
        $staffById->duty_category= 1;
        $staffById->save();
        return redirect('/manage-staff')->with('message', 'Staff duty Turned On');
    }

    public function editStaffInfo($id) {
        //$categoryById = Category::where('id', $id)->first();

        $staffInfoById = Staff::find($id);
        return view('admin.staff.edit-staff-info', ['staffInfoById'=>$staffInfoById]);
    }

    public function updateStaffInfo(Request $request) {
        $staffImage=$request->file('staff_image');
        if($staffImage){
            $staff=Staff::find($request->staffInfoById);
            unlink($staff->staff_image);

            $imageName = $staffImage->getClientOriginalName();
            $directory = 'staff-images/';
            $staffImage->move($directory,$imageName);
            $imgUrl = $directory.$imageName;

            $staff = Staff::find($request->staffInfoById);
            $staff->staff_name=$request->staff_name;
            $staff->mobile_number=$request->mobile_number;
            $staff->age=$request->age;
            $staff->join_date=$request->join_date;
            $staff->licence_number=$request->licence_number;
            $staff->salary=$request->salary;
            $staff->address=$request->address;
            $staff->staff_image=$imgUrl;
            $staff->duty_category=$request->duty_category;
            $staff->save();
        }else{

        $staff = Staff::find($request->staffInfoById);
        $staff->staff_name=$request->staff_name;
        $staff->mobile_number=$request->mobile_number;
        $staff->age=$request->age;
        $staff->join_date=$request->join_date;
        $staff->licence_number=$request->licence_number;
        $staff->salary=$request->salary;
        $staff->address=$request->address;
        $staff->duty_category=$request->duty_category;
        $staff->save();
        }

        return redirect('/manage-staff')->with('message', 'staff info updated successfully');
    }



}
