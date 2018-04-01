function sendFormEditProperty(id) {
	$('#buttonEditProperty').click(function(e) {
		var formData = $('#formEditProperty').serialize();

		$.ajax({
			url: '/wp-admin/admin-ajax.php?crud=PROPERTY&task=UPDATE_PROPERTY' + '&idProperty=' + id + '&action=md_support_save',
			type: 'POST',
			data: formData,
			cache: false,
			beforeSend: function() {
				$('#buttonEditProperty').text(' Editando...').attr('disabled', 'disabled').prepend('<i class="fa fa-spinner fa-spin"></i>');
			},
			success: function(result) {
				console.log(result);
				var parseResult = JSON.parse(result);
				if (parseResult.status === 200) {
					toastr.success(parseResult.data);
					// $('#formEditProperty')[0].reset();
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
				$('#buttonEditProperty').text(' Editar').removeAttr('disabled').prepend('<i class="fa fa-pencil fa-lg"></i>');
			}
		});

		e.preventDefault();
	});
}