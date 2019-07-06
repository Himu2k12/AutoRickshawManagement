@extends('front.master')
@section('title')
    About
@endsection
@section('content')
<div class="container">

    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">About
            <strong>Auto Rickshaw Management</strong>
        </h2>
        <hr class="divider">
        <div class="row">
            <div class="col-lg-6">
               <table class="table table-bordered" style="text-align: center; background-color: rgba(168,185,188,.4)">
                   <tr>
                       <th style="text-align: center">City</th>
                       <th style="text-align: center">Per Kilometer Rate</th>
                   </tr>
                   <tr>
                       <td style="text-align: center">Khulna</td>
                       <td style="text-align: center">8.00 TK</td>
                   </tr>
                   <tr>
                       <td style="text-align: center">Dhaka</td>
                       <td style="text-align: center">11.00 TK</td>
                   </tr>
                   <tr>
                       <td style="text-align: center">Chitagong</td>
                       <td style="text-align: center">10.00 TK</td>
                   </tr>

               </table>
            </div>
            <div class="col-lg-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
            </div>
        </div>
    </div>

    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Our
            <strong>Team</strong>
        </h2>
        <hr class="divider">
        <div class="row">
            @foreach($staffs as $staff)
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="card h-100">
                    <img class="card-img-top" src="{{$staff->staff_image}}" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title m-0">{{$staff->staff_name}}
                            <small class="text-muted">(Driver)</small>
                        </h4>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>

</div>

@endsection