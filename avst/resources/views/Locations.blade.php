@extends('layouts.web')






@section('content')
<head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
            width: 50%;
        }

        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id="map"></div>

<li class="nav-item">
    <a class="nav-link" href="{{ url('/getAllUnits') }}">All</a>
</li>

<script>
    var map;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 7.3086281, lng: 8.6728802},
            zoom: 23
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBc3zPW7iomxc1XunorH7FMUr6UCCZvtU&callback=initMap"
        async defer></script>


@endsection