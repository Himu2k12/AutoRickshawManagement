@extends('admin.master')

@section('title')
    Admin-Add Auto Information
@endsection

@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
            <h5 class="text-danger">{{Session::get('message')}}</h5>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-info">
                    <tr>
                        <th>SL No.</th>
                        <th>Licesnce No</th>
                        <th>Auto No</th>
                        <th>Including date</th>
                        <th>Condition</th>
                        <th>Estimated Milage</th>
                        <th>Additional description</th>
                        <th>Major Repair Details</th>
                        <th>on_service</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot  class="table-info">
                    <tr>
                        <th>SL No.</th>
                        <th>Licesnce No</th>
                        <th>Auto No</th>
                        <th>Including date</th>
                        <th>Condition</th>
                        <th>Estimated Milage</th>
                        <th>Additional description</th>
                        <th>Major Repair Details</th>
                        <th>on_service</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i=1?>
                    @foreach($autos as $auto)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$auto->licence_no}}</td>
                            <td>{{$auto->auto_no}}</td>
                            <td>{{$auto->include_date}}</td>
                            <td>{{$auto->condition}}</td>
                            <td>{{$auto->estimated_milage}}</td>
                            <td>{{$auto->additional_description}}</td>
                            <td>{{$auto->repair_details}}</td>
                            <td>{{$auto->on_service==1 ? 'On':'Off'}}</td>

                            <td>
                                @if($auto->on_service==1)
                                    <a href="{{url('/service-off/'.$auto->id)}}" class="btn btn-primary btn-xs" title="View Blog Details">
                                        <span class="glyphicon glyphicon-arrow-up">Stop Service</span>
                                    </a>
                                @else
                                    <a href="{{url('/service-on/'.$auto->id)}}" class="btn btn-success btn-xs" title="View Blog Details">
                                        <span class="glyphicon glyphicon-arrow-down">Start Service</span>
                                    </a>
                                @endif
                                <a href="{{url('/edit-autos/'.$auto->id)}}" class="btn btn-info btn-xs" title="Edit Blog">
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