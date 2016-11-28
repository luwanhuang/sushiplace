<?php
session_start();

//connection to Database
include 'connection.php';

//illegal session
//include 'illegalacc.php';

//record driver's driving plan
?>
<!DOCTYPE html>
<html>
  <head>
    
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        width: 100%;
        height: 380px;
      }
    </style>


  </head>

<body>

<!--<section class = "info">-->
<section class="info">
        <div class="info-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <!-- Start Title -->
                        <div id="mainTitle">

                            <h3 class="text-center">
                                Results
                                <?php //echo $d_time; echo $pdtime;
//echo $d_start; 
                                      //echo $address;
                                ?>
                            </h3>
                            <div id="distanceAmount"></div>
                            <div id="dvDistance"></div>
                        </div>
                        <!-- End Title -->

                        <!-- Start Rides info -->

                        <!--Google Map-->
                        <div id="map"></div>
                        <!--Google Map-->

                       <form class="form-horizontal" role="form" id="confirmPassengers" method='POST' name="confirmpass" action='driver_request_submit.php' data-ajax="false">
                        <div class="ui-content">
                            <ul data-role="listview" data-inset="true">
                              <li data-icon="false" class="current">
                                  <h3><?php echo $fullname;?></h3>
                                  <p><b>Location: </b><?php echo $plocation; ?></p>
                                  <p><b>Departure Time: </b><?php echo $pdtime; //echo $d_time; ?></p>
                                  <p><b>Destination: </b> The sushi place</p>
<!--                                  <p><b>Contact: </b><?echo echo $pcontact; ?></p>-->
                                </li>
                            </ul>
                        </div>
                        <div class="ui-block">

                           </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script type="text/javascript">

                                var x = document.getElementById("startpoint");
                                function getLocation() {
                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(showPosition);
                                    } else {
                                        window.alert("Geolocation is not supported by this browser.");
                                    }
                                }
                                function showPosition(position) {
                                    var pos = {
                                        lat: position.coords.latitude,
                                        lng: position.coords.longitude
                                    };
                                    var lat = encodeURI(pos.lat);
                                    var lng = encodeURI(pos.lng);
var url = "https://maps.google.com/maps/api/geocode/json?latlng=" + lat + "," + lng + "&key=AIzaSyDMnOJjJdodhxLjdCNKK5kPgI5N0IXy1Xk&sensor=false&language=en-EN";
                                    $.getJSON(url, function(data){
                                         var faddr = data.results[0].formatted_address;
                                             x.value = faddr;
                                         });
                                }

console.log(nametag);
console.log(passpts);
console.log(startLoc);

var map;
var waypts = [];

var directionsDisplay;
var directionsService;

var sushi = "-27.466800, 153.027725";

function initMap() {

  //Instantiate a directions service
  var directionsService = new google.maps.DirectionsService;

  //Create a map
  var initcentre = new google.maps.LatLng(-27.466800, 153.027725); 
  var mapOptions = {
    center: initcentre,
    zoom: 6
  }

  map = new google.maps.Map(document.getElementById("map"), mapOptions);

  //Render direction Display
  var rendererOptions = {
    map: map,
    suppressMarkers: false
  }
  directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);

  wayptsDisplay = new google.maps.InfoWindow();


  calculateAndDisplayRoute(directionsService, directionsDisplay);
}
    
function calculateAndDisplayRoute(directionsService, directionsDisplay) {



  //Remove any Existing markers from the map
  for(var i=0; i<waypts.length; i++){
    waypts[i].setMap(null);
  }
    
  //var tempStart = startLoc;

  //Add waypoints into waypts array
  for(var i=0; i<passpts.length; i++){//passpts = waypoints addresses
//      calculateDistance(tempStart, passpts[i]);
      waypts.push({
        location: passpts[i],
        stopover: true
      });
      //tempStart = passpts[i];
    }


  directionsService.route({
    origin: startLoc, //driver current location / registered address
    destination: sushi, //preset to UQ
    waypoints: waypts,
    optimizeWaypoints: true,
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.METRIC,
    avoidHighways: false,
    avoidTolls: true
  }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);

    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDubSC2d1uLs5lb-Lio6u0IQq4tzvHNpTQ&signed_in=true&callback=initMap" async defer>
</script>
</html>