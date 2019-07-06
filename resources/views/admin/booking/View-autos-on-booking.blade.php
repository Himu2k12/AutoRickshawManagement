@extends('admin.master')

@section('title')
    Admin-Booking Information
@endsection

@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>Manage Booking Information</div>
        <div class="card-body">
            <h5 class="text-danger" style="text-align: center">{{Session::get('message')}}</h5>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-info">
                    <tr>
                        <th>SL No.</th>
                        <th>Booking Id</th>
                        <th>Auto No</th>
                        <th>Time</th>



                    </tr>
                    </thead>
                    <tfoot  class="table-info">
                    <tr>
                        <th>SL No.</th>
                        <th>Booking Id</th>
                        <th>Auto No</th>
                        <th>Time</th>


                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i=1?>
                    @foreach($autosOnBooks as $autosOnBook)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$autosOnBook->booking_id}}</td>
                            <td>{{$autosOnBook->auto_no}}</td>
                            <td>{{$autosOnBook->created_at}}</td>



                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>


@endsection