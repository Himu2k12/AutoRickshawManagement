@extends('admin.master')

@section('title')
    Admin-Add Staff Information
@endsection

@section('content')

    <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="well" style="background-color: rgba(129,123,123,.1); border-radius: 10px">

                    <h1 style="text-align: center">Add Staff Information</h1>
                    <h4 style="text-align: center;padding-top: 20px">{{Session::get('message')}}</h4>
                    <form class="form-horizontal" action="{{url('/new-staff')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="control-label col-md-4">Staff Name</label>
                            <div class="col-md-12">
                                <input type="text" name="staff_name" class="form-control">
                                {{$errors->has('product_name')? $errors->first('product_name'):' '}}
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Mobile Number</label>
                            <div class="col-md-12">
                                <input type="text" name="mobile_number" class="form-control">
                                {{$errors->has('product_name')? $errors->first('product_name'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Age</label>
                            <div class="col-md-12">
                                <input type="text" name="age" class="form-control">
                                {{$errors->has('product_name')? $errors->first('product_name'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Joining Date</label>
                            <div class="col-md-12">
                                <input type="date" name="join_date" class="form-control">
                                {{$errors->has('product_name')? $errors->first('product_name'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Licence Number</label>
                            <div class="col-md-12">
                                <input type="text" name="licence_number" class="form-control">
                                {{$errors->has('product_code')? $errors->first('product_code'):' '}}
                            </div>
                        </div><div class="form-group">
                            <label class="control-label col-md-4">Salary</label>
                            <div class="col-md-12">
                                <input type="text" name="salary" class="form-control">
                                {{$errors->has('product_code')? $errors->first('product_code'):' '}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Full Address</label>
                            <div class="col-md-12">
                            <textarea class="form-control" name="address">

                            </textarea>
                                {{$errors->has('short_description')? $errors->first('short_description'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Staff Image</label>
                            <div class="col-md-12">
                                <input type="file" name="staff_image" accept="image/*"/>
                                {{$errors->has('product_image')? $errors->first('product_image'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Duty category</label>
                            <div class="col-md-12">
                                <select class="form-control" name="duty_category">
                                    <option value="">select one</option>
                                    <option value="1">On</option>
                                    <option value="0">OFF</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <input type="submit" class="btn btn-success btn-block" value="Save staff Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <div class="col-md-3"></div>

    </div>

@endsection