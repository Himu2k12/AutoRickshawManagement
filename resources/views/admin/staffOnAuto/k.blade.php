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
                        <th>Staff Id</th>
                        <th>Staff Name</th>
                        <th>Auto Number</th>
                        <th>Appoint Date</th>
                        <th>Dismisal Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>

                        <th>Record ID</th>
                        <th>Staff Id</th>
                        <th>Staff Name</th>
                        <th>Auto Number</th>
                        <th>Appoint Date</th>
                        <th>Dismisal Date</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i=1?>
                    @foreach($staffOnAutos as $staffOnAuto)
                        <tr>

                            <td>{{$staffOnAuto->id}}</td>
                            <td>{{$staffOnAuto->staff_id}}</td>
                            <td>{{$staffOnAuto->staff_name}}</td>
                            <td>{{$staffOnAuto->auto_id}}</td>
                            <td>{{$staffOnAuto->appoint_date}}</td>
                            <td>{{$staffOnAuto->dismisal_date}}</td>
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