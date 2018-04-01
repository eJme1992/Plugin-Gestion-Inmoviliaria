class GridPropertyInternational {

	constructor() {
		this.task = '';
		this.crud = '';
		this.pathAjax = '/wp-admin/admin-ajax.php?';

	}

	grid(data) {
		const self = this;
		self.task = 'FIND_ALL_PROPERTY_INTERNATIONAL';
		self.crud = 'PROPERTY';
		$('#tableProperties').bootstrapTable({
			method: 'GET',
			url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&action=md_support_save',
			striped: true,
			columns: [{
				field: 'idPropiedad',
				title: 'id',
				align: 'center'
			}, {
				field: 'titulo',
				title: 'Título',
				align: 'center'
			}, {
				field: 'idTipoDePublicacion',
				title: 'Tipo',
				align: 'center',
				formatter: this.formatterPublicationType
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
						row.sellers = data.sellers;
						row.typeProperty = data.typeProperty;
						self.viewProperty(row);
						if (row.latitud === null || row.latitud === '' && row.longitud === null || row.longitud === '') {
							$('#mapview').empty();
							$('#mapview').text(`No hay coordenadas para ver en el mapa`);
						} else {
							self.setMapViewParams(row.latitud, row.longitud);
						}
					},
					'click .viewResource': function(e, value, row, index) {
						window.open('/wp-admin/gestionar-recursos.php?idProperty=' + row.idPropiedad+ '&international='+true);
					},
					'click .add': function(e, value, row, index) {
						self.toggleModal('#modalAddResource', 'show');
						self.addResource(e, row);
					},
					'click .edit': function(e, value, row, index) {
						window.open('/wp-admin/editar-propiedad.php?idPropiedad=' + row.idPropiedad + '&titulo=' + row.titulo + '&precio=' + row.precio + '&direccion=' + row.direccion + '&departamento=' + null + '&provincia=' + null + '&distrito=' + null + '&area=' + row.area + '&latitud=' + null + '&longitud=' + null + '&empresa=' + row.empresa + '&urlVideo=' + row.urlVideo + '&descripcion=' + row.descripcion);
					},
					'click .remove': function(e, value, row, index) {
						self.deleteProperty(e, row);
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
			publicationType = 'Internacional';
		}
		return publicationType;
	}

	formatterEvent(value, row, index) {
		var ret = ['<a class="btn btn-default btn-xs view" href="javascript:void(0)" title="Ver Propiedad">', '<i class="fa fa-check fa-lg"></i>', '</a>  ',
			'<a class="btn btn-default btn-xs viewResource" href="javascript:void(0)" title="Ver Recursos">', '<i class="fa fa-file-image-o fa-lg"></i>', '</a>  ',
			'<a class="btn btn-primary btn-xs add" href="javascript:void(0)" title="Agregar Recurso">', '<i class="fa fa-plus fa-lg"></i>', '</a>  ',
			'<a class="btn btn-warning btn-xs edit" href="javascript:void(0)" title="Editar Propiedad">', '<i class="fa fa-pencil fa-lg"></i>', '</a>  ',
			'<a class="btn btn-danger btn-xs remove" href="javascript:void(0)" title="Eliminar Propiedad">', '<i id=delete' + row.idPropiedad + ' class="fa fa-remove fa-lg"></i>', '</a>'
		];

		return ret.join('');
	}

	addResource(e, row) {
		const self = this;
		self.task = 'ADD_RESOURCE';
		self.crud = 'PROPERTY';
		let parentEvent = e;

		$('#buttonAddResource').unbind('click').click((e) => {
			let formData = new FormData($('#formAddResource')[0]);

			$.ajax({
					url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&idProperty=' + row.idPropiedad + '&action=md_support_save',
					type: 'POST',
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: () => {
						$('#buttonAddResource').text(' Agregando...').attr('disabled', 'disabled').prepend('<i class="fa fa-spinner fa-spin"></i>');
					}
				})
				.done(data => {
					console.log(data);
					let parseData = JSON.parse(data);
					if (parseData.status === 200) {
						toastr.success(parseData.data);
						self.toggleModal('#modalAddResource', 'hide');
						self.refreshGrid('#tableResources');
						self.cleanForm('#formAddResource');
					} else if (parseData.status === 400) {
						toastr.warning(parseData.data);
					} else if (parseData.status === 404) {
						toastr.warning(parseData.data);
					} else {
						toastr.error(parseData.data);
					}
				})
				.fail(err => {
					console.log(err);
					let parseErr = JSON.parse(err);
					toastr.error(parseErr.data);
				})
				.always(() => {
					$('#buttonAddResource').text(' Agregar').removeAttr('disabled').prepend('<i class="fa fa-check fa-lg"></i>');
				});
			e.preventDefault();
		});
	}

	updateProperty() {
		alert('update');
	}

	deleteProperty(e, row) {
		const self = this;
		self.task = 'DELETE_ONE_PROPERTY';

		let confirmr = confirm('Esta seguro de eliminar esta Propiedad ?. Se eliminaran los recursos relacionados a el mismo.');
		if (confirmr === true) {
			$.ajax({
					url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&idProperty=' + row.idPropiedad + '&action=md_support_save',
					type: 'GET',
					cache: false,
					beforeSend: () => {
						$('#delete' + row.idPropiedad).removeClass('class="fa fa-remove fa-lg"').prepend('<i class="fa fa-spinner fa-spin"></i>');
					}
				})
				.done(data => {
					console.log(data);
					let parseData = JSON.parse(data);
					if (parseData.status === 200) {
						toastr.success(parseData.data);
					} else if (parseData.status === 400) {
						toastr.warning(parseData.data);
					} else if (parseData.status === 404) {
						toastr.warning(parseData.data);
					} else {
						toastr.error(parseData.data);
					}
				})
				.fail(err => {
					console.log(err);
					let parseErr = JSON.parse(err);
					toastr.error(parseErr.data);
				})
				.always(() => {
					self.refreshGrid('#tableProperties');
					self.refreshGrid('#tableResources');
				});

			e.preventDefault();

		} else {
			return false;
		}
	}

	viewProperty(row) {
		$('#modalVideo').empty();
		$('#modalTitulo').text(row.titulo);
		this.findSeller(row);
		this.findTypeProperty(row);
		$('#modalTipoPublicacion').text(this.formatterPublicationType(row.idTipoDePublicacion, '', ''));
		$('#modalPrecio').text(row.precio);
		$('#modalDireccion').text(row.direccion);
		$('#modalArea').text(row.area);
		if (row.urlVideo === null || row.urlVideo === '') {
			$('#modalVideo').text('No posee video');
		} else {
			$('#modalVideo').append('<a href="http://' + row.urlVideo + '" target="_blank">Click para ver el Video</a>');
		}
		$('#modalEmpresa').text(row.empresa);
		$('#modalDescripcion').text(row.descripcion);
		this.toggleModal('#modalProperty', 'show');
	}

	toggleModal(modalId, event) {
		$(modalId).modal(event);
	}

	setMapViewParams(lat, lon) {
		$('#mapview').empty();

		$('#mapview').append(`
			<a href="/wp-admin/admin.php?page=mapView&lat=${lat}&lon=${lon}" target="_blank">Click para ver en el mapa</a>
		`);
	}

	cleanForm(formId) {
		$(formId)[0].reset();
	}

	refreshGrid(gridId) {
		$(gridId).bootstrapTable('refresh');
	}

	findSeller(row) {
		let seller = row.sellers;
		for (let i = 0; i < seller.length; i++) {
			if (row.idVendedor === seller[i].idVendedor) {
				$('#modalVendedor').text(seller[i].nombre);
				break;
			}
		}
	}

	findTypeProperty(row) {
		let typeProperty = row.typeProperty;
		for (let i = 0; i < typeProperty.length; i++) {
			if (row.idTipoPropiedad === typeProperty[i].idTipoPropiedad) {
				$('#modalTipoPropiedad').text(typeProperty[i].nombre);
				break;
			}
		}
	}

}