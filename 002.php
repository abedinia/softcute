<html>
<head>
	<title>javascript-mobile-desktop-geolocation With No Simulation with Google Maps</title>
	<meta name = "viewport" content = "width = device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">		

	<style>
		body {font-family: Helvetica;font-size:11pt;padding:0px;margin:0px}
		#title {background-color:#e22640;padding:5px;}
		#current {font-size:10pt;padding:5px;}	
	</style>
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
		</script>
	</body>
</html>