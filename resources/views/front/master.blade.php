<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('Front/' )}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    {{--<!-- Custom fonts for this template -->--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('Front/' )}}/css/business-casual.css" rel="stylesheet">
<style>
    .book{
        float: left;
        padding-top: 20px;
    }
</style>
</head>

<body>
@include('front.includes.navbar')

@yield('content')

<!-- /.container -->

@include('front.includes.footer')
{{--<!-- Bootstrap core JavaScript -->--}}
<script src="{{asset('Front/' )}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('Front/' )}}/vendor/popper/popper.min.js"></script>
<script src="{{asset('Front/' )}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdioXyElx_oa9-pfpN1f0TX-aysl5Xo&libraries=places"></script>
<script type="text/javascript">
    var source, destination;
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    google.maps.event.addDomListener(window, 'load', function () {
        new google.maps.places.SearchBox(document.getElementById('txtSource'));
        new google.maps.places.SearchBox(document.getElementById('txtDestination'));
        directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
    });

    function GetRoute() {
        var dhaka = new google.maps.LatLng(23.777176, 90.399452);
        var mapOptions = {
            zoom: 10,
            center: dhaka
        };
        map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('dvPanel'));

        //*********DIRECTIONS AND ROUTE**********************//
        source = document.getElementById("txtSource").value;
        destination = document.getElementById("txtDestination").value;

        var request = {
            origin: source,
            destination: destination,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
            }
        });

        //*********DISTANCE AND DURATION**********************//
        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
            origins: [source],
            destinations: [destination],
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: google.maps.UnitSystem.METRIC,
            avoidHighways: false,
            avoidTolls: false
        }, function (response, status) {
            if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                var distance = response.rows[0].elements[0].distance.text;
                //var duration = response.rows[0].elements[0].duration.text;
                var dvDistance = document.getElementById("dvDistance");
                var inputDistance = document.getElementById("distance");
                inputDistance.value = distance;
                //dvDistance.innerHTML += "Duration:" + duration;

            } else {
                alert("Unable to find the distance via road.");
            }
        });
    }
</script>
<script>
    function checkStartpoint(){
        var checkStartpoint=$('#txtSource').val();
        if(checkStartpoint.length>=4){
            $('#errorName').html(' ');
        }else{
            $('#errorName').html('Start point should be atleast 4 charecter');
        }
    }

    $('#txtSource').keyup(function(){
        checkStartpoint();
    });

    function checkDestinationPoint(){
        var txtDestination=$('#txtDestination').val();
        if(txtDestination.length>=4){
            $('#errorend').html(' ');
        }else{
            $('#errorend').html('Destination point should be atleast 4 charecter');
        }
    }

    $('#txtDestination').keyup(function(){
        checkDestinationPoint();
    });

    function calculatePrice() {

        var distance=document.getElementById('distance').value;
//        var kilo = /(\d+)/g;
        var res = distance.split(" ")
        var res=parseInt(res);
        var auto=document.getElementById('numOfAuto').value;
        var price=(res*auto*11);
        document.getElementById('price').value =price;

    }
    function confirmBooking() {
        var startPoint=document.getElementById('txtSource').value;
        var endPoint=document.getElementById('txtDestination').value;
        var distance=document.getElementById('distance').value;
        if(startPoint,endPoint,distance){
        alert('Start Point:'+startPoint+'\n'+'End Point'+endPoint+'\n'+'Distance'+distance);}else{
            alert('PLease fill the fields correctly')
            return false;
        }
    }
    $("#city").val({{Session::get('selected_city')}});
    $("#trip").val({{Session::get('trip')}});
    $("#hour").val({{Session::get('hour')}});
    $("#min").val({{Session::get('min')}});
    $("#am_pm").val({{Session::get('am_pm')}});

</script>
</body>

</html>
