@extends('front.master')
@section('title')
    Booking
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12 bg-faded  p-4 my-4">
                <div class="col-md-6" style=" float: left">


                    <h1>{{Session::get('message')}}</h1>
                    <h3 style="text-align: center"><strong>Get Fare</strong></h3>
                    <form class="form-horizontal"  method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-4 book" >Starting Point</label>
                            <div class="col-md-8 book">
                                <input type="text" name="start_point" tabindex="3" id="txtSource" placeholder="Enter Your Start point"  class="form-control" />
                                <span id="errorName" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book">Ending Point</label>
                            <div class="col-md-8 book">
                                <input type="text" name="end_point" tabindex="4" id="txtDestination" onblur="GetRoute()" placeholder="Enter Your Destination" class="form-control" />
                                {{--{{$errors->has('product_code')? $errors->first('product_code'):' '}}--}}
                                <span id="errorend" class="text-danger"></span>
                            </div>
                        </div><div class="form-group">
                            <label class="control-label col-md-4 book">Distance</label>
                            <div class="col-md-8 book">
                                <input type="text" id="distance"  name="distance" class="form-control" readonly/>
                                {{--{{$errors->has('product_code')? $errors->first('product_code'):' '}}--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book">Number of Auto</label>
                            <div class="col-md-8 book">
                                <select class="form-control"tabindex="" id="numOfAuto" name="number_of_auto">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book">Price</label>
                            <div class="col-md-8 book">
                                <input type="text" name="price" id="price" value="{{Session::get('price')}}" tabindex="5" class="form-control" readonly>
                                {{$errors->has('product_price')? $errors->first('product_price'):' '}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12" style="padding-top: 20px;clear:both; text-align: center">
                                <input type="button" onclick="calculatePrice();" class="btn btn-success btn-block" tabindex="11" value="Get Fare"/>
                            </div>
                        </div>

                    </form>


                </div>
                <div class="col-md-6" style=" float: left;min-height:460px;">
                    <div id="dvMap" style=" width: 500px; height:460px;border: 2px solid navy;padding-bottom:10px;">
                    </div>
                    <div id="dvPanel" style="width: 500px;border: 2px solid navy">
                    </div>
                </div>
            </div>
            </div>

        </div>

    </div>


@endsection
