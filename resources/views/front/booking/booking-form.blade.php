@extends('front.master')
@section('title')
    Booking
@endsection

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12 bg-faded p-4 my-4">
                <?php $name=Session::get('name'); if(isset($name)){?>
                <div class="thumbnail"><h2 class="text-success" style="text-align: center">Welcome To AMS <span style="color:blue; font-size:34px; font-family: 'Arial';">{{Session::get('name')}}</span></h2></div>
                <?php } ?>
                <div class="col-md-6" style=" float: left">


                    <h1 style="text-align: center">Book Now</h1>
                    <h4 style="text-align: center" class="text-danger">{{Session::get('message')}}</h4>
                    <h4 style="text-align: center" class="text-success">{{Session::get('confirm')}}</h4>
                    <form class="form-horizontal" action="{{url('/new-booking')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-4 book" >Select your City</label>
                            <div class="col-md-8 book">
                                <select class="form-control" tabindex="1" id="city" name="selected_city">
                                    <option value="">select one</option>
                                    <option value="1">Dhaka</option>
                                    <option value="2">Khulna</option>
                                    <option value="3">Chitagong</option>
                                    <option value="4">Sylhet</option>
                                    <option value="5">Rajshahi</option>
                                </select>
                                <h5 class="text-danger">{{ $errors->has('selected_city') ? $errors->first('selected_city') : ' ' }}</h5>
                            </div>


                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book">Trip</label>
                            <div class="col-md-8 book">
                                <select class="form-control"tabindex="2" name="trip" id="trip">
                                    <option value="">select one</option>
                                    <option value="1">One Way Trip</option>
                                    <option value="2">Round Trip</option>
                                </select>
                                <h5 class="text-danger">{{ $errors->has('trip') ? $errors->first('trip') : ' ' }}</h5>
                            </div>


                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book" >Starting Point</label>
                            <div class="col-md-8 book">
                                <input type="text" name="start_point" tabindex="3" id="txtSource" placeholder="Enter Your Start point" value="{{Session::get('start_point')}}"  class="form-control" />
                                <h5 class="text-danger">{{ $errors->has('start_point') ? $errors->first('start_point') : ' ' }}</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book">Ending Point</label>
                            <div class="col-md-8 book">
                                <input type="text" name="end_point" tabindex="4" id="txtDestination" onblur="GetRoute()" placeholder="Enter Your Destination" value="{{Session::get('end_point')}}" class="form-control"  />
                                {{--{{$errors->has('product_code')? $errors->first('product_code'):' '}}--}}
                                <h5 class="text-danger"> {{ $errors->has('end_point') ? $errors->first('end_point') : ' ' }}</h5>
                            </div>
                        </div><div class="form-group">
                            <label class="control-label col-md-4 book">Distance</label>
                            <div class="col-md-8 book">
                                <input type="text" id="distance"  name="distance" class="form-control" value="{{Session::get('distance')}}" readonly/>
                                <h5 class="text-danger">{{$errors->has('distance')? $errors->first('distance'):' '}}</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book">Pick Up Date</label>
                            <div class="col-md-8 book">
                                <input type="date" name="pick_up_time" tabindex="5" class="form-control" value="{{Session::get('pick_up_time')}}">
                                <h5 class="text-danger"> {{$errors->has('pick_up_time')? $errors->first('pick_up_time'):' '}}</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book">Pick Up Time</label>
                            <div class="col-md-8 book">
                                <div class="row">
                                    <div class="col-md-4">
                                        <select class="form-control" tabindex="6" name="hour" id="hour">

                                            <option value="">Hour</option>
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
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control"  tabindex="7" name="min" id="min">
                                            <option value="">Min</option>
                                            <option value="00">00</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>
                                            <option value="41">41</option>
                                            <option value="42">42</option>
                                            <option value="43">43</option>
                                            <option value="44">44</option>
                                            <option value="45">45</option>
                                            <option value="46">46</option>
                                            <option value="47">47</option>
                                            <option value="48">48</option>
                                            <option value="49">49</option>
                                            <option value="50">50</option>
                                            <option value="51">51</option>
                                            <option value="52">52</option>
                                            <option value="53">53</option>
                                            <option value="54">54</option>
                                            <option value="55">55</option>
                                            <option value="56">56</option>
                                            <option value="57">57</option>
                                            <option value="58">58</option>
                                            <option value="59">59</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" tabindex="8" name="am_pm" id="am_pm">
                                            <option value="AM">AM</option>
                                            <option value="PM">PM</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book">Active Mobile no.</label>
                            <div class="col-md-8 book" >
                                <input type="text" name="mobile_number" tabindex="9" minlength="11" class="form-control" value="{{Session::get('mobile_number')}}" required>
                                <h5 class="text-danger">{{$errors->has('mobile_number')? $errors->first('mobile_number'):' '}}</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4 book">Number of Auto</label>
                            <div class="col-md-8 book">
                                <select class="form-control"tabindex="" name="number_of_auto">
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
                            <label class="control-label col-md-4 book" >Details of pick up point</label>
                            <div class="col-md-8 book" >
                            <textarea class="form-control" tabindex="10" name="short_description" required>{{Session::get('short_description')}}</textarea>
                                <h5 class="text-danger">{{$errors->has('short_description')? $errors->first('short_description'):' '}}</h5>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12" style="padding-top: 20px;clear:both; text-align: center">
                                <input type="submit" class="btn btn-success btn-block" tabindex="11" value="Confirm Booking">
                            </div>
                        </div>

                    </form>


                </div>
                <div class="col-md-6" style=" float: left; ">
                    <div >
                        <h1 style="text-align: center">Your Route</h1>
                        <div id="dvMap" style="height:686px; border: 2px solid #bbbfc3;">

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
