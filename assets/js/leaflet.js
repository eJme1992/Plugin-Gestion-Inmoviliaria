 function Leaflet() {
 	var mymap = L.map('mapid').setView([-12.046374, -77.042793], 11);
 	var popup = L.popup();

 	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
 		attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
 		maxZoom: 18,
 	}).addTo(mymap);

 	function onMapClick(e) {
 		popup
 			.setLatLng(e.latlng)
 			.setContent("Coordenadas obtenidas " + e.latlng.toString())
 			.openOn(mymap);

 		$('#latitud').val(e.latlng.lat);
 		$('#longitud').val(e.latlng.lng);
 	}

 	mymap.on('click', onMapClick);
 }