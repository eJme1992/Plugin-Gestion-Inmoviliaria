class GridDestacado {

	constructor(addDestacado) {
		this.task = '';
		this.crud = '';
		this.pathAjax = '/wp-admin/admin-ajax.php?';
		this.addDestacado = new AddDestacado();

	}

	grid() {
		const self = this;
		self.task = 'FIND_ALL_DESTACADO';
		self.crud = 'PROPERTY';
		$('#tableDestacado').bootstrapTable({
			method: 'GET',
			url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&action=md_support_save',
			striped: true,
			columns: [{
				field: 'idDestacado',
				title: 'id',
				align: 'center'
			}, {
				field: 'titulo',
				title: 'Título',
				align: 'center'
			}, {
				field: 'posicion',
				title: 'Posición',
				align: 'center'
			}, {
				title: 'Acciones',
				align: 'center',
				formatter: this.formatterEvent,
				events: {
					'click .remove': function(e, value, row, index) {
						self.deleteDestacado(e, row);
					}
				}
			}]
		});
	}

	formatterEvent(value, row, index) {
		var ret = ['<a class="btn btn-danger btn-xs remove" href="javascript:void(0)" title="Eliminar Propiedad">', '<i id=delete' + row.idDestacado + ' class="fa fa-remove fa-lg"></i>', '</a>'];

		return ret.join('');
	}

	deleteDestacado(e, row) {
		const self = this;
		self.task = 'DELETE_ONE_DESTACADO';
		self.crud = 'PROPERTY';

		var confirmr = confirm('Esta seguro de elminar este destacado ?');
		if (confirmr === true) {
			$.ajax({
				type: 'GET',
				url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&idDestacado=' + row.idDestacado + '&action=md_support_save',
				cache: false,
				beforeSend: function() {
					$('#delete' + row.idDestacado).removeClass('class="fa fa-remove fa-lg"').prepend('<i class="fa fa-spinner fa-spin"></i>');
				},
				success: function(result) {
					console.log(result);
					var parseResult = JSON.parse(result);
					if (parseResult.status === 200) {
						toastr.success(parseResult.data);
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
					self.refreshGrid();
					$('#selectInmueble').empty();
					$('#selectInmueble').append($('<option>').text('Seleccione...').attr('value', 0));
					self.addDestacado.loadSelectProperty();
				}
			});

			e.preventDefault();
		} else {
			return false;
		}
	}

	refreshGrid() {
		$('#tableDestacado').bootstrapTable('refresh');
	}

}