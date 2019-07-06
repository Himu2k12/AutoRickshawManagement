<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4 color">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-inverse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto" >
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="{{url('/')}}" style="color:white">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-4 ">
                    <a class="nav-link text-uppercase text-expanded" href="{{url('/about')}}" style="color:white">About</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="{{url('/booking')}}" style="color:white">Book Auto</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="{{url('/fare')}}" style="color:white">Get Fare</a>
                </li>
                {{--<li class="nav-item px-lg-4">--}}
                    {{--<a class="nav-link text-uppercase text-expanded" href="{{url('/contact')}}" style="color:white">Contact</a>--}}
                {{--</li>--}}
                <?php
                $test=Session::get('name');
                if(isset($test)){ ?>

                    <li class="nav-item px-lg-4">
                        <a style="color:white" class="nav-link text-uppercase text-expanded" href="{{url('/logout-user')}}"><span class="glyphicon glyphicon-log-in"></span>({{$test}})-Logout</a>
                    </li>

                <?php }else{ ?>
                <li class="nav-item px-lg-4">
                    <a style="color:white" class="nav-link text-uppercase text-expanded" href="{{url('/login-user')}}"><span class="glyphicon glyphicon-log-in"></span>Login/Reg</a>
                </li>


                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
