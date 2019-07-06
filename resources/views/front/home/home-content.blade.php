@extends('front.master')
@section('title')
    Home
@endsection
@section('content')
    <div class="container">

        <div class="bg-faded p-4 my-4">
            <!-- Image Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid w-100" src="{{asset('Front/' )}}/img/slider.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow">AMS</h3>
                            <p class="text-shadow">In Japan Auto Rickshaws are loking like this.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid w-100" src="{{asset('Front/' )}}/img/slide2.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow">AMS</h3>
                            <p class="text-shadow">In china and Bangladesh this type of autos are available</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid w-100" src="{{asset('Front/' )}}/img/bg.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow">AMS</h3>
                            <p class="text-shadow">These are Common in Bangladesh,India,Pakistan,Nepal</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Welcome Message -->
            <div class="text-center mt-4">
                <div class="text-heading text-muted text-lg">Welcome To</div>
                <h1 class="my-2">AMS</h1>
                <div class="text-heading text-muted text-lg">By
                    <strong>Himangshu Das</strong>
                </div>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
                <strong>Auto Rickshaw Management System</strong>
            </h2>
            <hr class="divider">
            <img class="img-fluid float-left mr-4 d-none d-lg-block" src="{{asset('Front/' )}}/img/b1.jpg" alt="" width="300px">
            <h3>Bangladesh</h3>
            <h4>"CNGs" in Dhaka.</h4>
            <p>Auto rickshaws (locally called "baby taxis" and more recently "CNGs" due
                to their fuel source, compressed natural gas) are one of the more popular
                modes of transport in Bangladesh mainly due to their size and speed. They
                are best suited to narrow, crowded streets, and are thus the principal means
                of covering longer distances within urban areas.Two-stroke engines had been
                identified as one of the leading sources of air pollution in Dhaka. Thus, since
                January 2003, traditional auto rickshaws were banned from the capital; only the
                new natural gas-powered models (CNG) were permitted to operate within the city
                limits. All CNGs are painted green to signify that the vehicles are eco-friendly
                and that each one has a meter built-in. Farhad Ilias and brother in-law Adil Ali
                imported the first Auto Rickshaw's in the late 1940's following the first successful
                turbo-prop engine facto</p>
              </div>
        <div class="bg-faded p-4 my-4">

            <img class="img-fluid float-right mr-4 d-none d-lg-block" src="{{asset('Front/' )}}/img/b3.jpg" alt="" width="300px">
            <h3>India</h3>
            <h4>Autos</h4>
            <p>Most cities offer auto rickshaw service, although cycle rickshaws are also
                common and even hand-pulled rickshaws exist in certain areas such as Kolkata.
                Auto rickshaws are used in cities and towns for short distances; they are less
                suited to long distances because they are slow and the carriages are open to air
                pollution.Auto rickshaws (often called "autos") provide cheap and efficient transportation.
                Modern auto rickshaws run on compressed natural gas (CNG) and are environmentally friendly
                compared to full-sized cars.It is also not uncommon in many parts of Indian metropolitan
                areas to see primary school children crammed into an auto rickshaw, transporting them between
                home and school, equivalent to the 'school run' performed by many parents in the West using
                their own cars.To augment speedy movement of traffic, auto rickshaws are not allowed in the
                southern part of Mumbai.[23]

                India is the location of the annual Rickshaw Run.</p>
              </div>

    </div>
@endsection
