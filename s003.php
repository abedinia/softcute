<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<script>
	window.onload=function(){
if(navigator.geolocation)
{
navigator.geolocation.getCurrentPosition(showPosition);
}
else
{
alert("Geolocation is not supported by this browser.");
}
}
function showPosition(pos){
alert("Latitude: "+pos.coords.latitude+"nLongitude: "+pos.coords.longitude);
}

window.onload=function(){
if(navigator.geolocation)
{
navigator.geolocation.getCurrentPosition(showPosition,showError);
}
else
{
alert("Geolocation is not supported by this browser.");
}
}
function showPosition(pos){
alert("Latitude: "+pos.coords.latitude+"nLongitude: "+pos.coords.longitude);
}
function showError(error)
  {
  switch(error.code)
    {
    case error.PERMISSION_DENIED:
      alert("User denied the request for Geolocation.")
      break;
    case error.POSITION_UNAVAILABLE:
      alert("Location information is unavailable.")
      break;
    case error.TIMEOUT:
      alert("The request to get user location timed out.")
      break;
    case error.UNKNOWN_ERROR:
      alert("An unknown error occurred.")
      break;
    }
  }
  
  window.onload=function(){
if(navigator.geolocation)
{
navigator.geolocation.watchPosition(showPosition);
}
else
{
alert("Geolocation is not supported by this browser.");
}
}
function showPosition(pos){
alert("Latitude: "+pos.coords.latitude+"nLongitude: "+pos.coords.longitude);
}

var watchID;
window.onload=function(){
if(navigator.geolocation)
{
watchID=navigator.geolocation.watchPosition(showPosition);
}
else
{
alert("Geolocation is not supported by this browser.");
}
}
function showPosition(pos){
alert("Latitude: "+pos.coords.latitude+"nLongitude: "+pos.coords.longitude);
}
//call this function to stop location updates
function stopWatch(){
   navigator.geolocation.clearWatch(watchID);
}
</script>
</body>
</html>