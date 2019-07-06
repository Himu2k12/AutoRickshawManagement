@extends('admin.master')

@section('title')
    Admin-Edit Auto Information
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                <div class="well">
                    <h1>{{Session::get('message')}}</h1>
                    <h1 style="text-align: center">Update Auto Information</h1>
                    <form class="form-horizontal" name="editAuto" action="{{url('/update-autos')}}" method="POST">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="control-label col-md-4">Licence No</label>
                            <div class="col-md-8">
                                <input type="text" name="licence_no" class="form-control" value="{{$autoInfoById->licence_no}}">
                                <input type="hidden" value="{{ $autoInfoById->id }}" name="auto_id" class="form-control"/>
                                {{$errors->has('product_name')? $errors->first('product_name'):' '}}
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Auto No</label>
                            <div class="col-md-8">
                                <input type="text" name="auto_no" class="form-control" value="{{$autoInfoById->auto_no}}">
                                {{$errors->has('product_name')? $errors->first('product_name'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Include Date</label>
                            <div class="col-md-8">
                                <input type="date" name="include_date" class="form-control" value="{{$autoInfoById->include_date}}">
                                {{$errors->has('product_name')? $errors->first('product_name'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Condition</label>
                            <div class="col-md-8">
                                <select class="form-control" name="condition">
                                    <option value="">select one</option>
                                    <option value="New">New</option>
                                    <option value="Good">Good</option>
                                    <option value="Old">Old</option>
                                    <option value="Older">Older</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Estimated Milage</label>
                            <div class="col-md-8">
                                <input type="text" name="estimated_milage" class="form-control" value="{{$autoInfoById->estimated_milage}}">
                                {{$errors->has('product_code')? $errors->first('product_code'):' '}}
                            </div>
                        </div><div class="form-group">
                            <label class="control-label col-md-4">Additional Description</label>
                            <div class="col-md-8">
                                <input type="text" name="additional_description" class="form-control" value="{{$autoInfoById->additional_description}}">
                                {{$errors->has('product_code')? $errors->first('product_code'):' '}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">Major Repair Details</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="repair_details">{{$autoInfoById->repair_details}}</textarea>
                                {{$errors->has('short_description')? $errors->first('short_description'):' '}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-4">On Service</label>
                            <div class="col-md-8">
                                <select class="form-control" name="on_service">
                                    <option value="">select one</option>
                                    <option value="1">On</option>
                                    <option value="0">OFF</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" class="btn btn-success btn-block" value="Update Auto Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editAuto'].elements['on_service'].value = '{{$autoInfoById->on_service}}';
        document.forms['editAuto'].elements['condition'].value = '{{$autoInfoById->condition}}';
    </script>
@endsection