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
      <title>Gestionar Inmueble</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="/wp-content/plugins/gestion-inmobiliaria-wp/assets/css/min/bootstrap/app.css" />
      <link rel="stylesheet" type="text/css" href="/wp-content/plugins/gestion-inmobiliaria-wp/assets/css/min/toastr/toastr.min.css" />
      <link rel="stylesheet" type="text/css" href="/wp-content/plugins/gestion-inmobiliaria-wp/assets/css/min/font-awesome/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="/wp-content/plugins/gestion-inmobiliaria-wp/assets/css/min/table/bootstrap-table.min.css" /> 
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
   </head>
   <body style="background-color:#F1F1F1">
      <div class="container">
         <div class="row" style="margin-top:1%">
            <div class="col-md-12">
               <div class="panel panel-primary">
                  <div class="panel-heading text-center">
                     <b class="panel-title">Gestionar Inmueble</b>
                  </div>
                  <div class="panel-body">
                     <ul class="nav nav-pills">
                        <li class="active">
                           <a href="#agregar" data-toggle="tab">Nuevo</a>
                        </li>
                        <li>
                           <a href="#listarInmueble" data-toggle="tab">Inmuebles</a>
                        </li>
                        <li>
                           <a href="#listarRecurso" data-toggle="tab">Recursos</a>
                        </li>
                     </ul>
                     <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="agregar">
                          <form id="propertyForm" name="propertyForm" enctype="multipart/form-data">
                            <fieldset>
                                 <div class="col-md-12" style="margin-top:1%">
                                    <label class="control-label" for="titulo">Titulo</label> 
                                    <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="form-control input-md" required="">
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="tipoPropiedad">Tipo de publicacion</label>
                                    <select id="tipoPropiedad" name="tipoPropiedad" class="form-control input-md">
                                       <option value="0">Seleccione...</option>
                                       <option value="1">Venta</option>
                                       <option value="2">Alquiler</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="precio">Precio</label> 
                                    <input id="precio" name="precio" type="number" min="0" class="form-control input-md" required="">
                                 </div>
                                 <div class="col-md-12" style="margin-top:1%">
                                    <label class="control-label" for="direccion">Direccion</label>  
                                    <input id="direccion" name="direccion" type="text" placeholder="Direccion" class="form-control input-md" required="">
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="departamento">Departamento</label> 
                                    <select id="departamento" name="departamento" class="form-control input-md">
                                    </select>
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="provincia">Provincia</label>  
                                    <select id="provincia" name="provincia" class="form-control input-md">
                                    </select> 
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="distrito">Distrito</label>  
                                    <select id="distrito" name="distrito" class="form-control input-md">
                                    </select>
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="area">Area</label>  
                                    <input id="area" name="area" type="text" placeholder="Area" class="form-control input-md" required="">
                                 </div>
                                 <div class="col-md-12" style="margin-top:1%">
                                     <div id="mapid" style="height: 180px;"></div>
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="latitud">Latitud</label>  
                                    <input id="latitud" name="latitud" type="number" step="any" class="form-control input-md">
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="longitud">Longitud</label>  
                                    <input id="longitud" name="longitud" type="number" step="any" class="form-control input-md">
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="empresa">Empresa</label>  
                                    <input id="empresa" name="empresa" type="text" placeholder="Empresa" class="form-control input-md">
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="urlVideo">Url Video</label>  
                                    <input id="urlVideo" name="urlVideo" type="text" placeholder="Url video" class="form-control input-md">
                                 </div>
                                 <div class="col-md-12" style="margin-top:1%">
                                    <label class="control-label" for="imagen">Imagen</label>
                                    <input id="imagen" name="imagen" class="input-file" type="file">
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="vendedor">Vendedor</label>
                                    <select id="vendedor" name="vendedor" class="form-control input-md">
                                       <option value="0">Seleccione...</option>
                                    </select> 
                                 </div>
                                 <div class="col-md-6" style="margin-top:1%">
                                    <label class="control-label" for="tipoDePropiedad">Tipo de Propiedad</label>
                                    <select id="tipoDePropiedad" name="tipoDePropiedad" class="form-control input-md">
                                       <option value="0">Seleccione...</option>
                                    </select> 
                                 </div>
                                 <div class="col-md-12" style="margin-top:1%">
                                    <label class="control-label" for="descripcion">Descripcion</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion">Agregue la descripción de su servicio </textarea>
                                 </div>
                             </fieldset>
                          </form>
                          <div class="col-md-12" style="padding-top: 1%;">
                             <div class="text-center">
                                <button id="buttonAddProperty" name="buttonAddProperty" class="btn btn-primary btn-lg">Enviar <i class="fa fa-check fa-lg" aria-hidden="true"></i></button>
                             </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="listarInmueble">
                           <table
                              id="tableProperties"
                              data-show-refresh="true"
                              data-page-list="[5, 10, 20, 50, 100, 200]"
                              data-pagination="true"
                              data-side-pagination="server"
                              data-show-columns="true"
                              data-show-toggle="true"
                              data-search="true">
                           </table>
                           <!-- Modal Ver Inmueble -->
                           <div class="modal fade" id="modalProperty" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalPropertyAriaL" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button name="btnCancel" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title text-center">Modal ver inmueble</h4>
                                    </div>
                                    <div class="modal-body">
                                       <fieldset>
                                          <div class="col-md-6">
                                             <span class="label label-default">Título:</span>
                                             <p class="lead" id="modalTitulo"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Tipo de Propiedad:</span>
                                             <p class="lead" id="modalTipoPropiedad"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Vendedor:</span>
                                             <p class="lead" id="modalVendedor"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Tipo de publicación:</span>
                                             <p class="lead" id="modalTipoPublicacion"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Precio:</span>
                                             <p class="lead" id="modalPrecio"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Empresa:</span>
                                             <p class="lead" id="modalEmpresa"></p>
                                          </div>
                                          <div class="col-md-12">
                                             <span class="label label-default">Dirección:</span>
                                             <p class="lead" id="modalDireccion"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Departamento:</span>
                                             <p class="lead" id="modalDepartamento"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Provincia:</span>
                                             <p class="lead" id="modalProvincia"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Distrito:</span>
                                             <p class="lead" id="modalDistrito"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Area:</span>
                                             <p class="lead" id="modalArea"></p>
                                          </div>
                                          <div class="col-md-12">
                                             <p class="lead" id="mapview"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Latitud:</span>
                                             <p class="lead" id="modalLatitud"></p>
                                          </div>
                                          <div class="col-md-6">
                                             <span class="label label-default">Longitud:</span>
                                             <p class="lead" id="modalLongitud"></p>
                                          </div>
                                          <div class="col-md-12">
                                             <span class="label label-default">Video:</span>
                                             <p class="lead" id="modalVideo"></p>
                                          </div>
                                          <div class="col-md-12">
                                             <span class="label label-default">Descripción:</span>
                                             <p class="lead" id="modalDescripcion"></p>
                                          </div>
                                       </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                       <button name="btnSalir" data-dismiss="modal" class="btn btn-default btn-lg"><span class="fa fa-close fa-lg"></span> Salir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Ver Inmueble -->
                        <!-- Modal Agregar Recurso -->
                        <div class="modal fade" id="modalAddResource" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalAddResourceAL" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button name="btnCancel" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-center">Modal agregar recurso</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form id="formAddResource" name="formAddResource" enctype="multipart/form-data" class="form-horizontal">
                                       <fieldset>
                                          <div class="col-md-12" style="margin-top:1%">
                                              <label class="control-label" for="modalNewResource">Recurso</label>
                                              <input id="modalNewResource" name="modalNewResource" class="input-file" type="file">
                                          </div>
                                       </fieldset>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                       <button id="buttonAddResource" name="buttonAddResource" class="btn btn-primary btn-lg">Enviar <i class="fa fa-check fa-lg" aria-hidden="true"></i></button>
                                       <button name="btnSalir" data-dismiss="modal" class="btn btn-default btn-lg"><span class="fa fa-close fa-lg"></span> Salir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Agregar Recurso  -->
                        </div>
                        <div class="tab-pane fade" id="listarRecurso">
                           <table
                              id="tableResources"
                              data-show-refresh="true"
                              data-page-list="[5, 10, 20, 50, 100, 200]" 
                              data-pagination="true"
                              data-side-pagination="server"
                              data-show-columns="true"
                              data-show-toggle="true"
                              data-search="true">
                           </table>
                           <!-- Modal Ver Recurso -->
                           <div class="modal fade" id="modalViewResource" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modalViewResourceAL" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button name="btnCancel" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title text-center">Modal ver recurso</h4>
                                    </div>
                                    <div class="modal-body">
                                       <fieldset>
                                          <div class="col-md-6 text-center">
                                             <span class="label label-default">Id recurso:</span>
                                             <p class="lead" id="modalIdRecurso"></p>
                                          </div>
                                          <div class="col-md-6 text-center">
                                             <span class="label label-default">Pertenece a propiedad:</span>
                                             <p class="lead" id="modalIdPropiedad"></p>
                                          </div>
                                          <div class="col-md-6 text-center">
                                             <span class="label label-default">Tipo:</span>
                                             <p class="lead" id="modalIdTipoRecurso"></p>
                                          </div>
                                          <div class="col-md-6 text-center">
                                             <span class="label label-default">Fecha de creación:</span>
                                             <p class="lead" id="modalFechaCreacion"></p>
                                          </div>
                                          <div class="col-md-12 text-center">
                                             <p class="lead" id="urlRecurso"></p>
                                          </div>
                                       </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                       <button name="btnSalir" data-dismiss="modal" class="btn btn-default btn-lg"><span class="fa fa-close fa-lg"></span> Salir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Ver Recurso  -->
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
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/index.js"></script>

   <!-- Add -->
      <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/selectDependent.js"></script>
      <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/utils.js"></script>
      <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/leaflet.js"></script>
      <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/sendFormAddProperty.js"></script>
      <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/addProperty.js"></script>
   <!-- Add -->
   <!-- List -->
      <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/gridProperties.js"></script>
      <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/gridResources.js"></script>
      <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/listProperties.js"></script>
      <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/listResources.js"></script>
   <!-- List -->
</html>