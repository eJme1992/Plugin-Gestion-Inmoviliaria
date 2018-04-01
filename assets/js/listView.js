class ListView {

	constructor() {
		this.task = '';
		this.crud = '';
		this.pathAjax = '/wp-admin/admin-ajax.php';

	};

	grid() {
		const self = this;
		self.task = 'FIND_ALL';
		self.crud = 'PROPERTY';
		$('#tableProperties').bootstrapTable({
			method: 'GET',
			cache: true,
			url: this.pathAjax + '?crud=' + this.crud + '&task=' + this.task + '&action=md_support_save',
			striped: true,
			pageSize: 10,
			minimumCountColumns: 2,
			columns: [{
				field: 'titulo',
				title: 'Título',
				align: 'center'
			}, {
				field: 'idTipoDePublicacion',
				title: 'Tipo',
				align: 'center',
				formatter: this.formatterPublicationType
			}, {
				field: 'correo',
				title: 'Correo',
				align: 'center'
			}, {
				field: 'telefono',
				title: 'Teléfono',
				align: 'center'
			}, {
				field: 'precio',
				title: 'Precio',
				align: 'center'
			}, {
				field: 'fechaDeCreacion',
				title: 'Creado',
				align: 'center'
			}, {
				title: 'Acciones',
				align: 'center',
				formatter: this.formatterEvent,
				events: {
					'click .view': function(e, value, row, index) {
						self.viewProperty(row);
						self.loadResources(row.idPropiedad);
						self.setMapViewParams(row.latitud, row.longitud);
						self.onHideModal('#modalProperty');
					},
					'click .edit': function(e, value, row, index) {
						self.updateProperty();
					},
					'click .remove': function(e, value, row, index) {
						self.deleteProperty();
					}
				}
			}]
		});
	}

	formatterPublicationType(value, row, index) {
		var publicationType = '';
		if (value === 1) {
			publicationType = 'Inmueble';
		} else if (value === 2) {
			publicationType = 'Servicio';
		} else {
			publicationType = 'Arriendo';
		}
		return publicationType;
	}

	formatterEvent(value, row, index) {
		var ret = ['<a class="btn btn-default view" href="javascript:void(0)" title="Ver">', '<i class="fa fa-check fa-lg"></i>', '</a>  ',
			'<a class="btn btn-warning edit" href="javascript:void(0)" title="Editar">', '<i class="fa fa-pencil fa-lg"></i>', '</a>  ',
			'<a class="btn btn-danger remove" href="javascript:void(0)" title="Eliminar">', '<i id=Delete-' + 'row.login' + ' class="fa fa-remove fa-lg"></i>', '</a>'
		];

		return ret.join('');
	}

	updateProperty() {
		alert('update');
	}

	deleteProperty() {
		alert('delete');
	}

	viewProperty(row) {
		$('#titulo').text(row.titulo);
		$('#tipoPublicacion').text(this.formatterPublicationType(row.idTipoDePublicacion, '', ''));
		$('#precio').text(row.precio);
		$('#direccion').text(row.direccion);
		$('#departamento').text(row.departamento);
		$('#provincia').text(row.provincia);
		$('#distrito').text(row.distrito);
		$('#area').text(row.area);
		$('#latitud').text(row.latitud);
		$('#longitud').text(row.longitud);
		$('#telefono').text(row.telefono);
		$('#correo').text(row.correo);
		$('#descripcion').text(row.descripcion);
		this.toggleModal('#modalProperty');
	}

	toggleModal(modalId, event) {
		$(modalId).modal(event);
	}

	onHideModal(modalId) {
		$(modalId).on('hidden.bs.modal', function() {
			$(modalId + ' a:first').tab('show');
		});
	}

	loadResources(propertyId) {
		$('#resourceContainer').empty();
		const self = this;
		self.task = 'FIND_RESOURCE';
		self.crud = 'PROPERTY';

		$.getJSON(self.pathAjax + '?crud=' + self.crud + '&task=' + self.task + '&idProperty=' + propertyId + '&action=md_support_save', function(response) {
			if (response.length) {
				for (var i = 0; i < response.length; i++) {

					$('#resourceContainer').append(`
						<div style="margin-top:1%" class="col-md-6">
							<span class="label label-default">Nombre:</span>
							<p class="lead"><a href="${response[i].urlRecurso}" target="_blank">Foto # ${response[i].idRecurso}</a></p>
						</div>
						<div style="margin-top:1%" class="col-md-6">
							<span class="label label-default">Fecha:</span>
							<p class="lead">${response[i].fechaDeCreacion}</p>
						</div>
						`);
				}
			} else {
				$('#resourceContainer').append(`
					<div style="margin-top:1%" class="col-md-12">
						<p class="lead">Sin recursos</p>
					</div>
					`);
			}
		});
	}

	setMapViewParams(lat, lon) {
		$('#mapview').empty();

		$('#mapview').append(`
			<a href="/wp-admin/admin.php?page=mapView&lat=${lat}&lon=${lon}" target="_blank">Click para ver en el mapa</a>
		`);
	}

}