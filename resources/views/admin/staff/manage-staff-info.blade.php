@extends('admin.master')

@section('title')
    Admin-Add Staff Information
@endsection

@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Staff Name</th>
                        <th>Staff Id</th>
                        <th>Mobile Number</th>
                        <th>Age</th>
                        <th>Joining Date</th>
                        <th>Licence Number</th>
                        <th>Salary</th>
                        <th>Full Address</th>
                        <th>Staff Image</th>
                        <th>Duty category</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>SL No.</th>
                        <th>Staff Name</th>
                        <th>Staff Id</th>
                        <th>Mobile Number</th>
                        <th>Age</th>
                        <th>Joining Date</th>
                        <th>Licence Number</th>
                        <th>Salary</th>
                        <th>Full Address</th>
                        <th>Staff Image</th>
                        <th>Duty category</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i=1?>
                    @foreach($Staffs as $allStaff)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$allStaff->staff_name}}</td>
                            <td>{{$allStaff->id}}</td>
                            <td>{{$allStaff->mobile_number}}</td>
                            <td>{{$allStaff->age}}</td>
                            <td>{{$allStaff->join_date}}</td>
                            <td>{{$allStaff->licence_number}}</td>
                            <td>{{$allStaff->salary}}</td>
                            <td>{{$allStaff->address}}</td>
                            <td><img src="{{$allStaff->staff_image}}" height="80px" width="80"> </td>
                            <td>{{$allStaff->duty_category==1 ? 'On':'Off'}}</td>

                            <td>
                                @if($allStaff->duty_category==1)
                                    <a href="{{url('/duty-off/'.$allStaff->id)}}" class="btn btn-primary btn-xs" title="View Blog Details">
                                        <span class="glyphicon glyphicon-arrow-up">Duty Off</span>
                                    </a>
                                @else
                                    <a href="{{url('/duty-on/'.$allStaff->id)}}" class="btn btn-success btn-xs" title="View Blog Details">
                                        <span class="glyphicon glyphicon-arrow-down">Duty On</span>
                                    </a>
                                @endif
                                <a href="{{url('/edit-staff/'.$allStaff->id)}}" class="btn btn-info btn-xs" title="Edit Blog">
                                    <span class="glyphicon glyphicon-edit">Edit</span>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>


@endsection