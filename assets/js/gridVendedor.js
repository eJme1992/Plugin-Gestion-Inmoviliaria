class GridVendedor {

	constructor() {
		this.task = '';
		this.crud = '';
		this.pathAjax = '/wp-admin/admin-ajax.php?';

	}

	grid() {
		const self = this;
		self.task = 'FIND_ALL_SELLER';
		self.crud = 'PROPERTY';
		$('#tableVendedor').bootstrapTable({
			method: 'GET',
			url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&action=md_support_save',
			striped: true,
			columns: [{
				field: 'idVendedor',
				title: 'id',
				align: 'center'
			}, {
				field: 'nombre',
				title: 'Nombre',
				align: 'center'
			}, {
				field: 'email',
				title: 'Correo',
				align: 'center'
			}, {
				field: 'telefono',
				title: 'Telefono',
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
					'click .edit': function(e, value, row, index) {
						self.viewEditVendedor(row);
						self.editVendedor(e, row);
					},
					'click .remove': function(e, value, row, index) {
						self.deleteCarousel(e, row);
					}
				}
			}]
		});
	}

	formatterEvent(value, row, index) {
		var ret = ['<a class="btn btn-warning btn-xs edit" href="javascript:void(0)" title="Editar Propiedad">', '<i class="fa fa-pencil fa-lg"></i>', '</a>  ',
			'<a class="btn btn-danger btn-xs remove" href="javascript:void(0)" title="Eliminar Propiedad">', '<i id=delete' + row.idVendedor + ' class="fa fa-remove fa-lg"></i>', '</a>'
		];
		return ret.join('');
	}

	viewEditVendedor(row) {
		$('#modalEditNombre').val(row.nombre);
		$('#modalEditCorreo').val(row.email);
		$('#modalEditTelefono').val(row.telefono);
		this.toggleModal('#modalEditVendedor', 'show');
	}

	editVendedor(e, row) {
		const self = this;
		self.task = 'UPDATE_SELLER';
		self.crud = 'PROPERTY';
		let parentEvent = e;

		$('#buttonEditVendedor').unbind('click').click((e) => {

			let formData = $('#formEditVendedor').serialize();

			$.ajax({
					url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&idSeller=' + row.idVendedor + '&action=md_support_save',
					type: 'POST',
					data: formData,
					beforeSend: () => {
						$('#buttonEditVendedor').text(' Editando...').attr('disabled', 'disabled').prepend('<i class="fa fa-spinner fa-spin"></i>');
					}
				})
				.done(data => {
					console.log(data);
					let parseData = JSON.parse(data);
					if (parseData.status === 200) {
						toastr.success(parseData.data);
						self.cleanForm('#formEditVendedor');
						self.toggleModal('#modalEditVendedor', 'hide');
						self.refreshGrid('#tableVendedor');
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
					$('#buttonEditVendedor').text(' Editar').removeAttr('disabled').prepend('<i class="fa fa-pencil fa-lg"></i>');
				});
			e.preventDefault();
		});
	}

	deleteCarousel(e, row) {
		const self = this;
		self.task = 'DELETE_ONE_SELLER';
		self.crud = 'PROPERTY';

		let confirmr = confirm('Esta seguro de eliminar este Vendedor ?');
		if (confirmr === true) {
			$.ajax({
					url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&idSeller=' + row.idVendedor + '&action=md_support_save',
					type: 'GET',
					cache: false,
					beforeSend: () => {
						$('#delete' + row.idVendedor).removeClass('class="fa fa-remove fa-lg"').prepend('<i class="fa fa-spinner fa-spin"></i>');
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
					self.refreshGrid('#tableVendedor');
				});

			e.preventDefault();

		} else {
			return false;
		}
	}

	toggleModal(modalId, event) {
		$(modalId).modal(event);
	}

	cleanForm(formId) {
		$(formId)[0].reset();
	}

	refreshGrid(gridId) {
		$(gridId).bootstrapTable('refresh');
	}

}