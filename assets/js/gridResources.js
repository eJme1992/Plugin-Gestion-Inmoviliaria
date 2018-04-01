class GridResources {

	constructor() {
		this.task = '';
		this.crud = '';
		this.pathAjax = '/wp-admin/admin-ajax.php';
	}

	grid() {
		const self = this;
		self.task = 'FIND_ALL_RESOURCES';
		self.crud = 'PROPERTY';
		$('#tableResources').bootstrapTable({
			method: 'GET',
			url: this.pathAjax + '?crud=' + this.crud + '&task=' + this.task + '&action=md_support_save',
			striped: true,
			columns: [{
				field: 'titulo',
				title: 'Pertenece a propiedad',
				align: 'center'
			}, {
				field: 'idTipoDeRecurso',
				title: 'Tipo',
				alingn: 'center',
				formatter: this.formatterResourceType
			}, {
				field: 'fechaDeCreacion',
				title: 'Fecha de creación',
				align: 'center'
			}, {
				title: 'Acciones',
				align: 'center',
				formatter: this.formatterEvent,
				events: {
					'click .view': function(e, value, row, index) {
						self.viewResource(row);
						self.onHideModal('#modalViewResource');
					},
					'click .remove': function(e, value, row, index) {
						self.deleteResource(e, row);
					}
				}
			}]
		});
	}

	formatterResourceType(value, row, index) {
		var resourceType = '';
		if (value === 1) {
			resourceType = 'Imagen';
		} else {
			resourceType = 'Otro';
		}

		return resourceType;
	}

	formatterEvent(value, row, index) {
		var ret = ['<a class="btn btn-default btn-xs view" href="javascript:void(0)" title="Ver">', '<i class="fa fa-check fa-lg"></i>', '</a>  ',
			'<a class="btn btn-danger btn-xs remove" href="javascript:void(0)" title="Eliminar">', '<i id=delete' + row.idRecurso + ' class="fa fa-remove fa-lg"></i>', '</a>'
		];

		return ret.join('');
	}

	viewResource(row) {
		$('#modalIdRecurso').text(row.idRecurso);
		$('#modalIdPropiedad').text(row.idPropiedad);
		$('#modalIdTipoRecurso').text(this.formatterResourceType(row.idTipoDeRecurso, '', ''));
		$('#modalFechaCreacion').text(row.fechaDeCreacion);
		$('#urlRecurso').append('<a href="' + row.urlRecurso + '" target="_blank">Click para ver el recurso.</a>');
		this.toggleModal('#modalViewResource', 'show');
	}

	deleteResource(e, row) {
		const self = this;
		self.task = 'DELETE_ONE_RESOURCE';
		self.crud = 'PROPERTY';

		var confirmr = confirm('Esta seguro de elminar este recurso ?');
		if (confirmr === true) {
			$.ajax({
				type: 'GET',
				url: this.pathAjax + '?crud=' + this.crud + '&task=' + this.task + '&idRecurso=' + row.idRecurso + '&idPropiedad=' + row.idPropiedad + '&action=md_support_save',
				cache: false,
				beforeSend: function() {
					$('#delete' + row.idRecurso).removeClass('class="fa fa-remove fa-lg"').prepend('<i class="fa fa-spinner fa-spin"></i>');
				},
				success: function(result) {
					console.log(result);
					var parseResult = JSON.parse(result);
					if (parseResult.status === 200) {
						toastr.success(parseResult.content);
					} else if (parseResult.status === 400) {
						toastr.warning(parseResult.content);
					} else if (parseResult.status === 500) {
						toastr.error(parseResult.content);
					}
				},
				error: function(err) {
					console.log(err);
					var parseErr = JSON.parse(err);
					toastr.error(parseErr.content);
				},
				complete: function() {
					self.refreshGrid();
				}
			});

			e.preventDefault();
		} else {
			return false;
		}
	}

	toggleModal(modalId, event) {
		$(modalId).modal(event);
	}

	onHideModal(modalId) {
		$(modalId).on('hidden.bs.modal', function() {
			$('#urlRecurso').empty();
			$('#selectInmuebles').empty().append($('<option>').text('Seleccione...').attr('value', 0));
		});
	}

	refreshGrid() {
		$('#tableResources').bootstrapTable('refresh');
	}
}