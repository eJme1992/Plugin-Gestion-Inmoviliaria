<?php
/**
 * Comment Management Screen
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Bootstrap */

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/wp-content/plugins/gestion-inmobiliaria-wp/assets/css/min/bootstrap/app.css" />
		<link rel="stylesheet" type="text/css" href="/wp-content/plugins/gestion-inmobiliaria-wp/assets/css/min/toastr/toastr.min.css" />
      	<link rel="stylesheet" type="text/css" href="/wp-content/plugins/gestion-inmobiliaria-wp/assets/css/min/font-awesome/font-awesome.min.css" />
      	<link rel="stylesheet" type="text/css" href="/wp-content/plugins/gestion-inmobiliaria-wp/assets/css/min/table/bootstrap-table.min.css" />
    </head>
    <body style="background-color:#F1F1F1">
    	<div class="container">
    		<div class="row" style="margin-top:1%">
    			<div class="col-md-12">
    				<div class="panel panel-primary">
    					<div class="panel-heading text-center">
    						<b class="panel-title">Destacados</b>
    					</div>
    					<div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#agregar" data-toggle="tab">Agregar</a>
                                </li>
                                <li>
                                    <a href="#listar" data-toggle="tab">Listar</a>
                                </li>
                                <li>
                                    <a href="#adicional" data-toggle="tab">Adicional</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="agregar">
                                    <form id="formAddDestacado" name="formAddDestacado" class="form-horizontal">
                                        <fieldset>
                                            <div style="margin-top:1%" class="col-md-12">
                                                <label class="control-label" for="selectInmueble">Inmueble</label>
                                                <select id="selectInmueble" name="selectInmueble" class="form-control input-md">
                                                    <option value="0">Seleccione...</option>
                                                </select>
                                            </div>
                                            <div style="margin-top:10%" class="col-md-12">
                                                <label class="control-label" for="selectPosicion">Posición</label>
                                                <select id="selectPosicion" name="selectPosicion" class="form-control input-md">
                                                    <option value="0">Seleccione...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <div class="col-md-12" style="padding-top: 5%; padding-bottom: 5%">
                                        <div class="text-center">
                                            <button id="buttonSendDestacado" name="buttonSendDestacado" class="btn btn-primary btn-lg">Enviar <span class="fa fa-check fa-lg" aria-hidden="true"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="listar">
                                    <fieldset>
                                        Listar
                                    </fieldset>
                                </div>
                                <div class="tab-pane fade" id="adicional">
                                    <fieldset>
                                        Adicional
                                    </fieldset>
                                </div>
                            </div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </body>
    	<script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/bootstrap/app.js"></script>
   		<script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/toastr/toastr.min.js"></script>
        <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/utils.js"></script>
        <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/addDestacado.js"></script>
        <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/destacado.js"></script>
</html>

