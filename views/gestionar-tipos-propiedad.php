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
      <title>Tipos de Propiedad</title>
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
               <div class="panel panel-default">
                  <div class="panel-heading text-center">
                     <b class="panel-title">Tipos de Propiedad</b>
                  </div>
                  <div class="panel-body">
                     <ul class="nav nav-pills">
                        <li class="active">
                           <a href="#agregar" data-toggle="tab">Nuevo</a>
                        </li>
                        <li>
                           <a href="#listar" data-toggle="tab">Listar</a>
                        </li>
                     </ul>
                     <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="agregar">
                        	<form id="fomSendTypeProperty" name="fomSendTypeProperty" class="form-hotizontal">
                        		<fieldset>
                                 <div class="col-md-12" style="margin-top:1%">
                        			<label class="control-label" for="nombre">Nombre</label> 
                        			<input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
                        		</div>
                        		</fieldset>
                        	</form>
                        	<div class="col-md-12" style="padding-top: 5%; padding-bottom: 1%">
                        		<div class="text-center">
                        			<button id="buttonSendTypeProperty" name="buttonSendTypeProperty" class="btn btn-primary btn-lg">Enviar <i class="fa fa-check fa-lg" aria-hidden="true"></i></button>
                        		</div>
                        	</div>
                        </div>
                        <div class="tab-pane fade" id="listar">

                        	<table 
                              id="tableTypeProperty"
                              name="tableTypeProperty"
                              data-show-refresh="true"
                              data-page-list="[5, 10, 20, 50, 100, 200]"
                              data-side-pagination="server"
                              data-pagination="true"
                              data-show-columns="true"
                              data-show-toggle="true"
                              data-search="true">
                           </table>
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
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/table/bootstrap-table.min.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/table/bootstrap-table-locale-all.min.js"></script>

   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/gestionar-tipos-propiedad.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/addTypeProperty.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/gridTypeProperty.js"></script>

</html>