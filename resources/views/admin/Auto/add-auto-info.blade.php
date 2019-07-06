@extends('admin.master')

@section('title')
    Admin-Add Auto Information
@endsection

@section('content')

    <div class="row" style="clear: both">

            <div class="col-md-3"></div>
            <div class="col-md-6">
            <div class="well" style="background-color: rgba(129,123,123,.1); border-radius: 10px">


                <form class="form-horizontal" action="{{url('/new-auto')}}" method="POST">
                    <h2 class="text-success col-md-12" style="text-align: center ;padding-top: 30px">Add Auto Information</h2>
                    <h4 style="">{{Session::get('message')}}</h4>
                    {{csrf_field()}}

                    <div class="form-group">
                        <label class="control-label col-md-3 bg">Licesnce No</label>
                        <div class="col-md-12 bg">
                            <input type="text" name="licence_no" onblur="split();" id="licenceNo" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 bg">Auto No</label>
                        <div class="col-md-12 bg">
                            <input type="text" name="auto_no" id="autoNo" class="form-control" readonly>

                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 bg">Including date</label>
                        <div class="col-md-12 bg">
                            <input type="date" name="include_date" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 bg">Condition</label>
                        <div class="col-md-12 bg">
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
                        <label class="control-label col-md-3 bg">Estimated Milage</label>

                          <div class="col-md-12 bg">
                                <input type="number" name="estimated_milage" class="form-control" required>
                         </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Additional description</label>
                        <div class="col-md-12 bg">
                            <textarea class="form-control textarea" rows="5" name="additional_description" required></textarea>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 bg">Major repair Details</label>
                        <div class="col-md-12 bg">
                            <textarea class="form-control textarea" rows="5" name="repair_details" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 bg">On Service</label>
                        <div class="col-md-12 bg">
                            <select class="form-control" name="on_service" required>
                                <option value="">select one</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-md-12" style="clear: both">
                            <input type="submit" class="btn btn-success btn-block" value="Save Auto Info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
            <div class="col-md-3"></div>
        </div>


@endsection