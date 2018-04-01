class GridSpecificResources {

	constructor(idProperty, isInternational) {
		this.task = '';
		this.crud = '';
		this.idProperty = idProperty;
		this.isInternational = isInternational;
		this.searchType = 'particular';
		this.pathAjax = '/wp-admin/admin-ajax.php?' + 'idProperty=' + this.idProperty + '&international=' + this.isInternational + '&searchType=' + this.searchType;
		this.grid(this.pathAjax);

	}

	grid(pathAjax) {
		const self = this;
		self.task = 'FIND_ALL_RESOURCES';
		self.crud = 'PROPERTY';
		$('#tableSpecificResources').bootstrapTable({
			method: 'GET',
			url: this.pathAjax + '&crud=' + this.crud + '&task=' + this.task + '&action=md_support_save',
			striped: true,
			columns: [{
				field: 'titulo',
				title: 'Pertenece a propiedad',
				align: 'center'
			}, {
				field: 'fechaDeCreacion',
				title: 'Fecha de creación',
				align: 'center'
			}, {
				title: 'Recurso',
				formatter: this.formatterResource,
				align: 'center',
				events: {
					'click .viewImage': function(e, value, row, index) {
						window.open(row.urlRecurso, this.target, 'width=800,height=600');
					}
				}
			}, {
				title: 'Acciones',
				align: 'center',
				formatter: this.formatterEvent,
				events: {
					'click .remove': function(e, value, row, index) {
						self.deleteResource(e, row);
					}
				}
			}]
		});
	}

	formatterResource(value, row, index) {
		return `<img alt="${row.urlRecurso}" src="${row.urlRecurso}" srcset="" class="avatar avatar-26 photo viewImage" height="50" width="50" style="cursor: pointer;">`;
	}

	formatterEvent(value, row, index) {
		var retVal = ['<a class="btn btn-danger btn-xs remove" href="javascript:void(0)" title="Eliminar Recurso">', '<i id=delete' + row.idRecurso + ' class="fa fa-remove fa-lg"></i>', '</a>'];
		return retVal.join('');
	}

	refreshGrid() {
		$('#tableSpecificResources').bootstrapTable('refresh');
	}

	deleteResource(e, row) {
		const self = this;
		self.task = 'DELETE_ONE_RESOURCE';
		self.crud = 'PROPERTY';

		var confirmr = confirm('Esta seguro de elminar este recurso ?');
		if (confirmr === true) {
			$.ajax({
				type: 'GET',
				url: '/wp-admin/admin-ajax.php?' + 'crud=' + this.crud + '&task=' + this.task + '&idRecurso=' + row.idRecurso + '&idPropiedad=' + row.idPropiedad + '&action=md_support_save',
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

}