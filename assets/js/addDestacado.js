class AddDestacado {

	constructor() {
		this.task = '';
		this.crud = '';
		this.pathAjax = '/wp-admin/admin-ajax.php';

	}

	loadSelectProperty() {
		const self = this;
		self.task = 'FILL_SELECT_PROPERTIES';
		self.crud = 'PROPERTY';

		$.getJSON(self.pathAjax + '?crud=' + self.crud + '&task=' + self.task + '&action=md_support_save', function(response) {
			if (response.length) {
				for (var i = 0; i < response.length; i++) {
					$('#selectInmueble').append($('<option>').text(response[i].titulo).attr('value', response[i].idPropiedad));
				}
			} else {
				toastr.info('No hay inmuebles disponibles.');
			}
		});
	}

	add(e) {
		const self = this;
		self.task = 'ADD_DESTACADO';
		self.crud = 'PROPERTY';

		var formSerialized = $('#formAddDestacado').serialize();

		$.ajax({
			type: 'POST',
			url: self.pathAjax + '?crud=' + self.crud + '&task=' + self.task + '&action=md_support_save',
			data: formSerialized,
			cache: false,
			beforeSend: function() {
				$('#buttonSendDestacado').text(' Enviando...').attr('disabled', 'disabled').prepend('<i class="fa fa-spinner fa-spin"></i>');
			},
			success: function(result) {
				console.log(result);
				var parseResult = JSON.parse(result);
				if (parseResult.status === 200) {
					toastr.success(parseResult.data);
					cleanForm('#formAddDestacado');
					$('#selectInmueble').empty();
					$('#selectInmueble').append($('<option>').text('Seleccione...').attr('value', 0));
					self.loadSelectProperty();
				} else if (parseResult.status === 400) {
					toastr.warning(parseResult.data);
				} else if (parseResult.status === 500) {
					toastr.error(parseResult.data);
				}
			},
			error: function(err) {
				console.log(err);
				var parseErr = JSON.parse(err);
				toastr.error(parseErr.data);
			},
			complete: function() {
				$('#buttonSendDestacado').text(' Enviar').removeAttr('disabled').prepend('<i class="fa fa-check fa-lg"></i>');
				$('#tableDestacado').bootstrapTable('refresh');
			}
		});

		e.preventDefault();

	}

}