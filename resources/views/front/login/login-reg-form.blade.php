@extends('front.master')
@section('title')
    Login/Register
@endsection

@section('content')

    <div class="well" style="" id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="col-md-5 bg-faded p-4 my-4" style="float: left; margin-right:30px;">
                        <h4 class="text-center text-danger">{{Session::get('login')}}</h4>


                        <h2 class="text-center text-success" >Login</h2>
                        <hr/>
                        <h3 class="text-center text-danger"></h3>
                        <h4 class="text-center text-danger">{{Session::get('log')}}</h4>
                        <form action="{{url('/user-login')}}" method="POST" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label id="bt" class="col-md-4 book control-label">Email Address</label>
                                <div class="col-sm-8 book">
                                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email Address"  value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-md-4 book control-label">Password</label>
                                <div class="col-sm-8 book">
                                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12" style="clear: both;padding-top: 20px">
                                    <button name="btn" id="btn-login" class="btn btn-success btn-block">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 bg-faded p-4 my-4" style="float: left">
                        <h2 class="text-center text-success">Registration</h2>
                        <hr/>

                        <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                        <form action="{{url('/user-registration')}}" method="POST" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputname" class="col-md-4 book control-label">Full Name</label>
                                <div class="col-md-8 book">
                                    <input type="text" name="name" id="name" class="form-control" id="inputname" placeholder="Full Name" required>
                                    <span id="errorName" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Address"  class="col-md-4 book control-label">Address</label>
                                <div class="col-md-8 book">
                                    <textarea rows="4" cols="50" id="address" name="address" class="form-control" required></textarea>
                                    <span id="errorAddress"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="postCode" class="col-md-4 book control-label">Post Code</label>
                                <div class="col-md-8 book">
                                    <input type="text" name="post_code" class="form-control" id="postCode" placeholder="Post Code" required>
                                    <span id="errorPostcode"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender" class="col-md-4 book control-label" style="padding-top: 0px;">Gender</label>
                                <div class="col-md-8 book">
                                    <input type="radio" name="gender" value="male" checked> Male
                                    <input type="radio" name="gender" value="female"> Female
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Email" class="col-md-4 book control-label">Email Address</label>
                                <div class="col-md-8 book">
                                    <input type="email" name="email" class="form-control" id="Email" placeholder="UserName@example.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 book control-label">Password</label>
                                <div class="col-md-8 book">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                    <span id="errorPassword"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-4 book control-label">Confirm Password</label>
                                <div class="col-md-8 book">
                                    <input type="password" name="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                                    <span id="errorConPass"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12" style="clear: both;padding-top: 20px;">
                                    <button type="submit" name="btn-register" class="btn btn-success btn-block">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
