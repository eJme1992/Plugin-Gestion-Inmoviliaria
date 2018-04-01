$(document).ready(function() {
	Leaflet();
	function loadSelectSeller(cb) {
		$.getJSON('/wp-admin/admin-ajax.php?crud=PROPERTY&task=FILL_SELECT_SELLER&action=md_support_save', function(response) {
			if (response.length) {
				for (var i = 0; i < response.length; i++) {
					$('#vendedor').append($('<option>').text(response[i].nombre).attr('value', response[i].idVendedor));
				}
			} else {
				toastr.info('No hay Vendedores disponibles.');
			}
			cb(response);
		});
	}

	function loadSelectTypeProperty(cb) {
		$.getJSON('/wp-admin/admin-ajax.php?crud=PROPERTY&task=FILL_SELECT_TYPE_PROPERTY&action=md_support_save', function(response) {
			if (response.length) {
				for (var i = 0; i < response.length; i++) {
					$('#tipoDePropiedad').append($('<option>').text(response[i].nombre).attr('value', response[i].idTipoPropiedad));
				}
			} else {
				toastr.info('No hay Tipos de Propiedad disponibles.');
			}
			cb(response);
		});
	}

	loadSelectSeller((sellers) => {
		let data = {};
		data.sellers = sellers; 
		sendFormAddProperty();
		loadSelectTypeProperty((typeProperty) => {
			data.typeProperty = typeProperty;
			const listView = new GridProperties();
			listView.grid(data);
		});
	});

});