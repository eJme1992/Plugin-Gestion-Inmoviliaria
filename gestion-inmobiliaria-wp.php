<?php

/**
* Plugin Name: Gestión Inmobiliaria
* Plugin URI: https://www.ejme.com.ve
* Description: Plugin wordpress para gestionar inmuebles. 
* Version: 0.0.1
* Author: Edwin Mogollón <edwin.jme@hotmail.com>
* Author URI: https://www.ejme.com.ve
**/


function gestionarInmuebles() {
	require_once (dirname( __FILE__ )."/views/gestionar-inmuebles.php");
}

function gestionarInmueblesInternacional() {
	require_once (dirname( __FILE__ )."/views/gestionar-inmuebles-internacional.php");
}

function gestionarTipoPropiedad() {
	require_once (dirname( __FILE__ )."/views/gestionar-tipos-propiedad.php");
}

function mapView() {
	require_once (dirname( __FILE__ )."/views/mapview.php");
}

function gestionarDestacado() {
	require_once (dirname( __FILE__ )."/views/gestionar-destacado.php");
}

function gestionarVendedor() {
	require_once (dirname( __FILE__ )."/views/gestionar-vendedor.php");	
}

function gestionInmobiliaria() {
	add_menu_page ('Inmuebles', 'Inmuebles', '0', 'gestionarInmuebles', '', 'dashicons-store', 101);
	add_submenu_page('gestionarInmuebles', 'Gestionar Inmueble', 'Gestionar Inmueble', '0', 'gestionarInmuebles', 'gestionarInmuebles');
	add_submenu_page('gestionarInmuebles', 'Gestionar Inmueble Internacional', 'Gestionar Inmueble Internacional', '0', 'gestionarInmueblesInternacional', 'gestionarInmueblesInternacional');
	add_submenu_page('gestionarInmuebles', 'Gestionar Destacado', 'Gestionar Destacado', '0', 'gestionarDestacado', 'gestionarDestacado');
	add_submenu_page('gestionarInmuebles', 'Tipos Propiedad', 'Tipos Propiedad', '0', 'gestionarTipoPropiedad', 'gestionarTipoPropiedad');
	add_submenu_page('gestionarInmuebles', 'Vendedor', 'Vendedor', '0', 'gestionarVendedor', 'gestionarVendedor');
	add_submenu_page('gestionarInmuebles', 'Visor de mapa', 'Visor de mapa', '0', 'mapView', 'mapView');
}

add_action('admin_menu', 'gestionInmobiliaria'); 

add_action('wp_ajax_md_support_save','md_support_save');
add_action('wp_ajax_nopriv_md_support_save','md_support_save');

require_once(dirname( __FILE__ ).'/class/Business/BusinessProperty.php');

function md_support_save() {
	$crud = $_GET['crud'];

	if ($crud == 'PROPERTY') {
		BusinessProperty::getTask($_GET["task"]);
	} else {

	}

  	die();
 }