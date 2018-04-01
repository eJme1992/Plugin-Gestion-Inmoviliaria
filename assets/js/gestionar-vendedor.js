$(document).ready(() => {
	const addVendedor = new AddVendedor();
	const gridVendedor = new GridVendedor();

	gridVendedor.grid();

	$("#buttonAddVendedor").click((e) => {
		addVendedor.add(e);
	});
});