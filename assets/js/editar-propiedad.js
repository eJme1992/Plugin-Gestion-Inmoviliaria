$(document).ready(() => {

	var idProperty = getParameterByName('idPropiedad');
	var longitud = (getParameterByName('longitud') !== 'null') ? getParameterByName('longitud') : -77.042793;
	var latitud = (getParameterByName('latitud') !== 'null') ? getParameterByName('latitud') : -12.046374;
	var zoom = (longitud !== -77.042793 && latitud !== -12.046374) ? 18 : 11;

	var mymap = L.map('mapid').setView([latitud, longitud], zoom);
	var popup = L.popup();

	function Leaflet() {
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
			maxZoom: 18,
		}).addTo(mymap);

		if (longitud !== -77.042793 && latitud !== -12.046374) {
			L.marker([latitud, longitud]).addTo(mymap)
			.bindPopup('Ubicación Actual.')
			.openPopup();
		}

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

	function loadSelectSeller() {
		$.getJSON('/wp-admin/admin-ajax.php?crud=PROPERTY&task=FILL_SELECT_SELLER&action=md_support_save', function(response) {
			if (response.length) {
				for (var i = 0; i < response.length; i++) {
					$('#vendedor').append($('<option>').text(response[i].nombre).attr('value', response[i].idVendedor));
				}
			} else {
				toastr.info('No hay Vendedores disponibles.');
			}
		});
	}

	function loadTypeProperty() {
		$.getJSON('/wp-admin/admin-ajax.php?crud=PROPERTY&task=FILL_SELECT_TYPE_PROPERTY&action=md_support_save', function(response) {
			if (response.length) {
				for (var i = 0; i < response.length; i++) {
					$('#tipoDePropiedad').append($('<option>').text(response[i].nombre).attr('value', response[i].idTipoPropiedad));
				}
			} else {
				toastr.info('No hay Tipo de Propiedad disponibles.');
			}
		});
	}

	function getParameterByName(name, url) {
		if (!url) url = window.location.href;
		name = name.replace(/[\[\]]/g, "\\$&");
		var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
			results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';
		return decodeURIComponent(results[2].replace(/\+/g, " "));
	}

	Leaflet();
	loadSelectSeller();
	loadTypeProperty();
	sendFormEditProperty(idProperty);

});