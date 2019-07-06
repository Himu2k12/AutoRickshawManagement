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
                        <th>Trip</th>
                        <th>Start Point</th>
                        <th>End Point</th>
                        <th>Distance</th>
                        <th>Pick Up Time</th>
                        <th>Mobile Number</th>
                        <th>Number Of Auto</th>
                        <th>Short Description</th>
                        <th>Fare</th>
                        <th>Booking Time</th>
                        <th>Auto Assigned</th>

                        <th style="width:100px">Select Auto</th>

                    </tr>
                    </thead>
                    <tfoot  class="table-info">
                    <tr>
                        <th>SL No.</th>
                        <th>Trip</th>
                        <th>Start Point</th>
                        <th>End Point</th>
                        <th>Distance</th>
                        <th>Pick Up Time</th>
                        <th>Mobile Number</th>
                        <th>Number Of Auto</th>
                        <th>Short Description</th>
                        <th>Fare</th>
                        <th>Booking Time</th>
                        <th>Auto Assigned</th>
                        <th style="width:100px">Select Auto</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $i=1?>
                    @foreach($manageBookings as $manageBooking)
                        <tr>
                            <td>{{$manageBooking->id}}</td>
                            <td>{{$manageBooking->trip==1 ? 'One Way':'Round Trip'}}</td>
                            <td>{{$manageBooking->start_point}}</td>
                            <td>{{$manageBooking->end_point}}</td>
                            <td>{{$manageBooking->distance}}</td>
                            <td>{{$manageBooking->hour}}:{{$manageBooking->min}}:{{$manageBooking->am_pm}}</td>
                            <td>{{$manageBooking->mobile_number}}</td>
                            <td>{{$manageBooking->number_of_auto}}</td>
                            <td>{{$manageBooking->short_description}}</td>
                            <td>{{$manageBooking->fare}}TK</td>
                            <td>{{$manageBooking->booking_time}}</td>
                            <td>{{$manageBooking->auto_no==1?'given':''}}</td>

                            <form action="{{url('/add-auto-on-booking')}}" method="Post">
                                {{csrf_field()}}
                            <td style="width:100px">
                                @if($manageBooking->auto_no==0)
                                <select multiple class="form-control col-md-12" style="width: 100px" name="select_auto[]">
                                    <option value="">Select One</option>
                                    @foreach($serviceOnAutos as $serviceOnAuto)
                                        <option value="{{$serviceOnAuto->auto_no}}">{{$serviceOnAuto->auto_no}}</option>
                                    @endforeach
                                </select>
                                    <input type="submit" class="btn btn-danger btn-xs" value="SET AUTO">
                                    <input type="hidden" name="aid"class="btn btn-danger btn-xs" value="{{$manageBooking->id}}">
                            </td>
                                <input type="hidden" name="booking_id" value="{{$manageBooking->id}}">
                                @else
                                    <a href="{{url('/edit-booking-auto/'.$manageBooking->id)}}" class="btn btn-success btn-xs" title="Reset Auto">
                                        <span class="glyphicon glyphicon-edit">Reset Auto</span>
                                    </a>

                                @endif
                            </form>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>


@endsection