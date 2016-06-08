$(function() { 
"use strict";
    function initMap() {
        var map = new google.maps.Map($("#map-canvas").get(0), {
                zoom: 10
        });
        var myMarker = new google.maps.Marker({
            position: new google.maps.LatLng(29.426, -98.489),
            draggable: true
        });
        map.setCenter(myMarker.position);
        myMarker.setMap(map);
        var $latValue = $('#lat').val(29.426);
        var $lngValue = $('#lng').val(-98.489);
        // Search Box
        var input = $('#pac-input').get(0);
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();
            map.setZoom(10)
            $latValue.val(places[0].geometry.location.lat().toFixed(3));
            $lngValue.val(places[0].geometry.location.lng().toFixed(3));
            weatherInfo();
            if (places.length == 0) {
                return;
            };
            myMarker.setPosition(places[0].geometry.location);
            map.setCenter(places[0].geometry.location);
        });
        // Geocoder
        function geocodeAddress(geocoder, map, infoWindow) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({ "address": $address }, function(results, status) {
           // Check for a successful result
                if (status == google.maps.GeocoderStatus.OK) {
                   // Recenter the map over the address
                   map.setCenter(results[0].geometry.location);
                } else {
                   alert("Geocoding was not successful - STATUS: " + status);
                }
                var LatLng = { lat: (results.geometry.location.lat()), lng: (results.geometry.location.lng()) };

                var myMarker = new google.maps.Marker({
                    position: LatLng,
                    animation: google.maps.Animation.DROP,
                    map: map
                });
            });
        };
        function weatherInfo () {
            // Weather Info
        $.get("http://api.openweathermap.org/data/2.5/forecast", {
            APPID: "f86addf6638afb000f6ae4f59b2acdc7",
            lat: $latValue.val(),
            lon: $lngValue.val(),
            units: "imperial",
            cnt: 3
        }).done(function(data) {
            $('.dayInfo').html("");
            $('#cityName').html("");
            $('#cityName').append('<h2>' + data.city.name + ", " + data.city.country + '</h2>');
            $('.dayInfo').each(function(i) {
                var maxTemp = Math.round(data.list[i].main.temp_max);
                var minTemp = Math.round(data.list[i].main.temp_min);
                $(this).append('<p class="temp">' + maxTemp + "&#176 / " + minTemp + "&#176" + '</p>' + '<img src="http://openweathermap.org/img/w/' + data.list[i].weather[0].icon + '.png">' + '<p>' + data.list[i].weather[0].main + ": " + data.list[i].weather[0].description + '</p>' + '<p>' + "Humidity: " + data.list[i].main.humidity + '</p>' + '<p>' + "Wind: " + data.list[i].wind.speed + '</p>' + '<p>' + "Pressure: " + data.list[i].main.pressure + '</p>');
                });
            });
        };
        weatherInfo();
        // Drag And Get Lat/Lng
        google.maps.event.addListener(myMarker, 'dragend', function(e) {
            $('#lat').val(e.latLng.lat().toFixed(3));
            $('#lng').val(e.latLng.lng().toFixed(3));
            weatherInfo();
        });
        $('#lSearch').click(function() {
            map.setZoom(10);
            myMarker.setPosition({lat: parseFloat($('#lat').val()), lng: parseFloat($('#lng').val())})
            map.setCenter(myMarker.position);
            weatherInfo();
        });
        google.maps.event.addListener(map, 'click', function(e) {
            myMarker.setPosition(e.latLng);
            map.setCenter(myMarker.position);
            $('#lat').val(e.latLng.lat().toFixed(3));
            $('#lng').val(e.latLng.lng().toFixed(3));
            weatherInfo();
        });
    };
    initMap();
});
