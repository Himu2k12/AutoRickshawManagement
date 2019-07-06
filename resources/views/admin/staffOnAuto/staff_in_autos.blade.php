@extends('admin.master')

@section('title')
    Admin-Add Staff Information
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                <div class="well">
                    <h1>{{Session::get('message')}}</h1>
                    <h1 style="text-align: center">Add Staff on a auto</h1>
                    <form class="form-horizontal" action="{{url('/new-staff-on-auto')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="control-label col-md-4">Staff Name</label>
                            <div class="col-md-8">
                                <select class="form-control" name="staff_id">
                                    <option value="">select one</option>
                                    @foreach($staffs as $staff)
                                    <option value="{{$staff->id}}">{{$staff->staff_name}} ({{$staff->id}})</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Auto No</label>
                            <div class="col-md-8">
                                <select class="form-control" name="auto_id">
                                    <option value="">select one</option>
                                    @foreach($autos as $auto)
                                    <option value="{{$auto->id}}">{{$auto->auto_no}}</option>
                                        @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Appoint Date</label>
                            <div class="col-md-8">
                                <input type="date" name="appoint_date" class="form-control">
                                {{$errors->has('product_name')? $errors->first('product_name'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Dismisal Date</label>
                            <div class="col-md-8">
                                <input type="date" name="dismisal_date" class="form-control">
                                {{$errors->has('product_name')? $errors->first('product_name'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" class="btn btn-success btn-block" value="Confirm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection