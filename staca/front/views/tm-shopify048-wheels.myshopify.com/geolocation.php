<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>HTML5 Geolocation Demo</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>

</head>

<body>

<div id="doc">

  <h1>HTML5 Geolocation Demo</h1>
  
  <div id="geo-wrapper"></div>
  <p id="msg"></p>
  <p id="lat"></p>
  <p id="long"></p>
  <p id="msg2"></p>
  
</div>

<script type="text/javascript">
function supports_geolocation() {
  return !!navigator.geolocation;
}

function get_location() {
  if ( supports_geolocation() ) {
    navigator.geolocation.getCurrentPosition(show_map, handle_error);
  } else {
    // no native support;
  $("#msg").text('Your browser doesn\'t support geolocation!');
  }
}



function show_map(position) {
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;

   var latitude2 = 36.8132;
  var longitude2 = 10.1339;
  // let's show a map or do something interesting!
  
  $("#geo-wrapper").css({'width':'640px','height':'480px'});
  
  var latlng = new google.maps.LatLng(latitude, longitude);
  var latlng2 = new google.maps.LatLng(latitude2, longitude2);
  var myOptions = {
    zoom: 10,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("geo-wrapper"), myOptions);
  
  var marker = new google.maps.Marker({
    position: latlng,
    title:"You are here (more or less)!"
  });

  var marker2 = new google.maps.Marker({
    position: latlng2,
    title:"It is here (more or less)!"
  });
  
  // To add the marker to the map, call setMap();
  marker.setMap(map);
    marker2.setMap(map);
/*
  $("#msg").text('Your browser thinks you are here:');
  $("#lat").text('Latitude: ' + latitude);
  $("#long").text('Longitude: ' + longitude);
*/
var distance = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(latitude, longitude), new google.maps.LatLng(latitude2, longitude2));
if(distance>=1000)
  $("#msg2").text('Distance : ' + distance.toFixed(0)/1000 + ' KM');
else
    $("#msg2").text('Distance : ' + distance.toFixed(0) + ' M');




}

function handle_error(err) {
  if (err.code == 1) {
    // user said no!
  $("#msg").text('You chose not to share your location.');
  }
}







get_location();
</script>

</body>
</html>