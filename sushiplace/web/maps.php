
<?php
session_start();

//connection to Database
include 'connection.php';

//checking database
include 'check.php';

//get passenger's address
$uid = $_SESSION['userID'];
$my_query = mysql_query("SELECT address FROM user WHERE userID = '$uid'");
$row = mysql_fetch_array($my_query);
$address = $row['address'];

?>

<!DOCTYPE html>
<html>
<head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
var myCenter=new google.maps.LatLng(-27.466800, 153.027725);
function initialize() {
	var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var mapProp = {
    center:myCenter,
    zoom:13,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
          
</script>
</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
<label >Start Address:</label>
 <div id="startlocation" class="input-group">
                                <input type="text"  id="startpoint" name="startlocation" value="<?php echo $address ?>">                                  
                                <button  type="button" onclick="getLocation()" name="gerCurrentLocation">location</button>
                            </div>
                             <script>
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
                            </script>
                            <button  type="button" onclick="calculateAndDisplayRoute()" name="gerCurrentLocation">direction</button>
                            <script>
						


							  

							function calculateAndDisplayRoute(directionsService, directionsDisplay) {
							  directionsService.route({
							    origin: document.getElementById("startpoint").value;
							    destination: new google.maps.LatLng(-27.466800, 153.027725);
							    travelMode: google.maps.TravelMode.DRIVING
							  }, function(response, status) {
							    if (status === google.maps.DirectionsStatus.OK) {
							      directionsDisplay.setDirections(response);
							    } else {
							      window.alert('Directions request failed due to ' + status);
							    }
							  });
							}

										

 
</body>

</html>