$(document).ready(() => {
	const addTypeProperty = new AddTypeProperty();
	const gridTypeProperty = new GridTypeProperty();

	gridTypeProperty.grid();

	$('#buttonSendTypeProperty').click((e) => {
		addTypeProperty.add(e);
	});
});