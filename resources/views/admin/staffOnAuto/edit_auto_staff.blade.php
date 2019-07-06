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
                        <th>Record ID</th>
                        <th>Staff Id</th>
                        <th>Staff Name</th>
                        <th>Auto Id</th>
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
                        <th>Auto Id</th>
                        <th>Auto Number</th>
                        <th>Appoint Date</th>
                        <th>Dismisal Date</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($staffOnAutos as $staffOnAuto)
                        <tr>

                            <td>{{$staffOnAuto->id}}</td>
                            <td>{{$staffOnAuto->staff_id}}</td>
                            <td>{{$staffOnAuto->staff_name}}</td>
                            <td>{{$staffOnAuto->auto_id}}</td>
                            <td>{{$staffOnAuto->auto_no}}</td>
                            <td>{{$staffOnAuto->appoint_date}}</td>
                            <td>{{$staffOnAuto->dismisal_date}}</td>
                            <td>
                                @if($staffOnAuto->dismisal_date="na")
                            <form action="{{url('/add-dismisal-date')}}" method="post">
                                {{csrf_field()}}
                                <div>
                                    <input type="date" name="dismisal_date" class="form-control" value="">
                                    <input type="hidden" name="id" class="form-control" value="{{$staffOnAuto->id}}">
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-danger btn-xs" value="Submit">
                                </div>
                            </form>
                                @else
                                    SAVED
                                    @endif

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