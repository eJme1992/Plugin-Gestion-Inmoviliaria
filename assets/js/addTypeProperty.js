class AddTypeProperty {

	constructor() {
		this.task = '';
		this.pathAjax = '/wp-admin/admin-ajax.php?';

	}

	add(event) {
		const self = this;
		self.task = 'ADD_TYPE_PROPERTY';
		self.crud = "PROPERTY";

		let formData = new FormData($('#fomSendTypeProperty')[0]);

		$.ajax({
				url: this.pathAjax + 'crud=' + this.crud + '&task=' + this.task + '&action=md_support_save',
				type: 'POST',
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: () => {
					$('#buttonSendTypeProperty').text(' Enviando...').attr('disabled', 'disabled').prepend('<i class="fa fa-spinner fa-spin"></i>');
				}
			})
			.done(data => {
				console.log(data);
				let parseData = JSON.parse(data);
				if (parseData.status === 200) {
					toastr.success(parseData.data);
					self.cleanForm('#fomSendTypeProperty');
					$('#tableTypeProperty').bootstrapTable('refresh');
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
				$('#buttonSendTypeProperty').text(' Enviar').removeAttr('disabled').prepend('<i class="fa fa-check fa-lg"></i>');
			});

		event.preventDefault();

	}

	cleanForm(formId) {
		$(formId)[0].reset();
	}

}