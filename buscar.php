<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Localizacion del usuario</title>
<script type="text/javascript">
function loadLocation () {

	navigator.geolocation.getCurrentPosition(viewMap,ViewError,{timeout:1000});
}


function viewMap (position) {
	
	var lon = position.coords.longitude;	
	var lat = position.coords.latitude;		

	var link = "http://maps.google.com/?ll="+lat+","+lon+"&z=14";
	document.getElementById("long").innerHTML = "Longitud: "+lon;
	document.getElementById("latitud").innerHTML = "Latitud: "+lat;

	document.getElementById("link").href = link;

}



function ViewError (error) {
	alert(error.code);
}	



	</script>
	
</head>
<body onload="loadLocation();">
<label id="long"></label> <br/>
<label id="latitud"></label> <br/>
<a id="link" target="_blank">Enlace al mapa</a>


</body>
</html>