function sendForm() {
	$('#buttonSend').click(function(event) {
		var formData = new FormData($('#propertyForm')[0]);
		formData.append('action', 'md_support_save');

		$.ajax({
			url: '/wp-admin/admin-ajax.php?crud=' + 'PROPERTY' + '&task=' + 'CREATE',
			type: 'POST',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function() {
				$('#buttonSend').text(' Enviando...').attr('disabled', 'disabled').prepend('<i class="fa fa-spinner fa-spin"></i>');
			},
			success: function(result) {
				var parseResult = JSON.parse(result);
				if (parseResult.status === 200) {
					toastr.success(parseResult.content);
					cleanForm('#propertyForm');
				} else if (parseResult.status === 400) {
					toastr.warning(parseResult.content);
				} else if (parseResult.status === 500) {
					toastr.error(parseResult.content);
				}
			},
			error: function(err) {
				var parseErr = JSON.parse(err);
				toastr.error(parseErr.content);
			},
			complete: function() {
				$('#buttonSend').text(' Enviar').removeAttr('disabled').prepend('<i class="fa fa-check fa-lg"></i>');
			}
		});

		event.preventDefault();
	});
}