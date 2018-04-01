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
      <style>
    #mapid { height: 180px; }
  </style>
   </head>
   <body style="background-color:#F1F1F1">
      <div class="container">
        <div class="row" style="margin-top:1%">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <b class="panel-title">Lista de Inmuebles</b>
                    </div>
                    <div class="panel-body">
                        <div id="toolbar">
                           <input type="text" name="" placeholder="buscar..." class="form-control input-md">
                        </div>
                        <table id="tableProperties" data-toolbar="#toolbar" data-show-refresh="true" id="table-pagination" data-page-list="[5, 10, 20, 50, 100, 200]"  data-height="455" data-pagination="true" data-show-columns="true" data-show-toggle="true"></table>
                        <!-- Modal -->
                        <div class="modal fade" id="modalProperty" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalPropertyAriaL" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button name="btnCancel" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-center">Modal ver inmueble</h4>
                                    </div>
                                    <div class="modal-body">
                                    <ul class="nav nav-pills">
                                        <li class="active">
                                            <a href="#detalle" data-toggle="tab">Detalle</a>
                                        </li>
                                        <li>
                                            <a href="#coordenadas" data-toggle="tab">Coordenadas</a>
                                        </li>
                                        <li>
                                            <a href="#recursos" data-toggle="tab">Recursos</a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade active in" id="detalle">
                                            <fieldset>
                                           <div style="margin-top:1%" class="col-md-12">
                                                <span class="label label-default">Título:</span>
                                                <p class="lead" id="titulo"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-6">
                                                <span class="label label-default">Tipo de publiación:</span>
                                                <p class="lead" id="tipoPublicacion"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-6">
                                                <span class="label label-default">Precio:</span>
                                                <p class="lead" id="precio"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-12">
                                                <span class="label label-default">Dirección:</span>
                                                <p class="lead" id="direccion"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-6">
                                                <span class="label label-default">Departamento:</span>
                                                <p class="lead" id="departamento"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-6">
                                                <span class="label label-default">Provincia:</span>
                                                <p class="lead" id="provincia"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-6">
                                                <span class="label label-default">Distrito:</span>
                                                <p class="lead" id="distrito"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-6">
                                                <span class="label label-default">Area:</span>
                                                <p class="lead" id="area"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-6">
                                                <span class="label label-default">Teléfono:</span>
                                                <p class="lead" id="telefono"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-6">
                                                <span class="label label-default">Correo:</span>
                                                <p class="lead" id="correo"></p>
                                           </div>
                                           <div style="margin-top:1%" class="col-md-12">
                                                <span class="label label-default">Descripción:</span>
                                                <p class="lead" id="descripcion"></p>
                                           </div>
                                        </fieldset>
                                    </div>
                                    <div class="tab-pane fade" id="coordenadas">
                                        <fieldset>
                                        <div style="margin-top:1%" class="col-md-12">
                                            <span class="label label-default">Ver en mapa:</span>
                                            <p class="lead" id="mapview"></p>
                                        </div>
                                       <div style="margin-top:1%" class="col-md-6">
                                            <span class="label label-default">Latitud:</span>
                                            <p class="lead" id="latitud"></p>
                                       </div>
                                       <div style="margin-top:1%" class="col-md-6">
                                            <span class="label label-default">Longitud:</span>
                                            <p class="lead" id="longitud"></p>
                                       </div>
                                       </fieldset>
                                    </div>
                                    <div class="tab-pane fade" id="recursos">
                                        <fieldset>
                                        <div id="resourceContainer">
                                            
                                        </div>
                                       </fieldset>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button name="btnSalir" data-dismiss="modal" class="btn btn-default btn-lg"><span class="fa fa-close fa-lg"></span> Salir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->

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
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/listView.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/list.js"></script>
      
</html>

