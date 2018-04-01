class GridTypeProperty {

	constructor() {
		this.task = '';
		this.crud = '';
		this.pathAjax = '/wp-admin/admin-ajax.php?';

	}

	grid() {
		const self = this;
		self.task = 'FIND_ALL_TYPE_PROPERTY';
		self.crud = 'PROPERTY';
		$('#tableTypeProperty').bootstrapTable({
			method: 'GET',
			url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&action=md_support_save',
			striped: true,
			columns: [{
				field: 'idTipoPropiedad',
				title: 'id',
				align: 'center'
			}, {
				field: 'nombre',
				title: 'Nombre',
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
					'click .remove': function(e, value, row, index) {
						self.deleteTypeProperty(e, row);
					}
				}
			}]
		});
	}

	formatterEvent(value, row, index) {
		var ret = [
			'<a class="btn btn-danger btn-xs remove" href="javascript:void(0)" title="Eliminar Propiedad">', '<i id=delete' + row.idTipoPropiedad + ' class="fa fa-remove fa-lg"></i>', '</a>'
		];
		return ret.join('');
	}

	deleteTypeProperty(e, row) {
		const self = this;
		self.task = 'DELETE_TYPE_PROPERTY';
		self.crud = 'PROPERTY';

		let confirmr = confirm('Esta seguro de eliminar este Tipo de Propiedad ?');
		if (confirmr === true) {
			$.ajax({
					url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&idTipoPropiedad=' + row.idTipoPropiedad + '&action=md_support_save',
					type: 'GET',
					cache: false,
					beforeSend: () => {
						$('#delete' + row.idTipoPropiedad).removeClass('class="fa fa-remove fa-lg"').prepend('<i class="fa fa-spinner fa-spin"></i>');
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
					self.refreshGrid('#tableTypeProperty');
				});

			e.preventDefault();

		} else {
			return false;
		}
	}

	refreshGrid(gridId) {
		$(gridId).bootstrapTable('refresh');
	}

}