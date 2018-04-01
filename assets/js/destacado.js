$(document).ready(function() {
	const addDestacado = new AddDestacado();
	addDestacado.loadSelectProperty();

	const gridDestacado = new GridDestacado(addDestacado);
	gridDestacado.grid();

	$('#buttonSendDestacado').click(function(e) {
		addDestacado.add(e);
	});

});