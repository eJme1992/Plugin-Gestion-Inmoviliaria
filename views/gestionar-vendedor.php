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
      <title>Gestionar Vendedor</title>
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
                     <b class="panel-title">Gestionar Vendedor</b>
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
                        	<form id="formSendVendedor" name="formSendVendedor" class="form-hotizontal">
                        		<fieldset>
                                 <div class="col-md-12" style="margin-top:1%">
                        				<label class="control-label" for="nombre">Nombre</label> 
                        				<input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
                        			</div>
                        			<div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="correo">Email</label> 
                                    <input id="correo" name="correo" type="email" placeholder="Email" class="form-control input-md" required="">
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                        				<label class="control-label" for="telefono">Telefono</label> 
                        				<input id="telefono" name="telefono" type="text" placeholder="Telefono" class="form-control input-md" required="">
                        			</div>
                        		</fieldset>
                        	</form>
                        	<div class="col-md-12" style="padding-top: 5%; padding-bottom: 1%">
                        		<div class="text-center">
                        			<button id="buttonAddVendedor" name="buttonAddVendedor" class="btn btn-primary btn-lg">Enviar <i class="fa fa-check fa-lg" aria-hidden="true"></i></button>
                        		</div>
                        	</div>
                        </div>
                        <div class="tab-pane fade" id="listar">

                        	<table 
                              id="tableVendedor"
                              name="tableVendedor"
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
   <!-- Modal Editar -->
   <div class="modal fade" id="modalEditVendedor" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalVendedorAriaL" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button name="btnCancel" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title text-center">Modal editar carousel</h4>
            </div>
            <div class="modal-body">
               <form id="formEditVendedor" name="formEditVendedor" class="form-hotizontal">
                  <fieldset>
                     <div class="col-md-12" style="margin-top:1%">
                        <label class="control-label" for="modalEditNombre">Nombre</label> 
                        <input id="modalEditNombre" name="modalEditNombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
                     </div>
                     <div class="col-md-6" style="margin-top:1%">
                        <label class="control-label" for="modalEditCorreo">Correo</label> 
                        <input id="modalEditCorreo" name="modalEditCorreo" type="email" placeholder="Correo" class="form-control input-md" required="">
                     </div>
                     <div class="col-md-6" style="margin-top:1%">
                        <label class="control-label" for="modalEditTelefono">Telefono</label> 
                        <input id="modalEditTelefono" name="modalEditTelefono" type="text" placeholder="Correo" class="form-control input-md" required="">
                     </div>
                  </fieldset>
               </form>
            </div>
            <div class="modal-footer">
               <button id="buttonEditVendedor" name="buttonEditVendedor" class="btn btn-warning btn-lg">Editar <i class="fa fa-pencil fa-lg" aria-hidden="true"></i></button>
               <button name="btnSalir" data-dismiss="modal" class="btn btn-default btn-lg"><span class="fa fa-close fa-lg"></span> Salir</button>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal Editar -->
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/bootstrap/app.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/toastr/toastr.min.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/table/bootstrap-table.min.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/table/bootstrap-table-locale-all.min.js"></script>

   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/gestionar-vendedor.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/addVendedor.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/gridVendedor.js"></script>

</html>