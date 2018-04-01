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
      <link rel="stylesheet" type="text/css" href="/wp-content/plugins/gestion-inmobiliaria-wp/assets/css/min/font-awesome/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/> -->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
      <!-- <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script> -->
      <style>
    #mapid { height: 180px; }
  </style>
   </head>
   <body style="background-color:#F1F1F1">
      <div style="margin-top:1%" class="row">
         <form id="propertyForm" name="propertyForm" enctype="multipart/form-data">
            <fieldset>
               <!-- Form Name -->
               <legend>Ingresar Publicacion </legend>
               <!-- Text input-->
               <div style="margin-top:1%" class="col-md-12">
                  <label class="control-label" for="titulo">Titulo</label> 
                  <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="form-control input-md" required="">
               </div>
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="tipoPropiedad">Tipo de publicacion</label>
                  <select id="tipoPropiedad" name="tipoPropiedad" class="form-control input-md">
                     <option value="0">Seleccione...</option>
                     <option value="1">Venta</option>
                     <option value="2">Alquiler</option>
                  </select>
               </div>
               <!-- Text input-->
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="precio">Precio</label> 
                  <input id="precio" name="precio" type="number" min="0" class="form-control input-md" required="">
               </div>
               <!-- Text input-->
               <div style="margin-top:1%" class="col-md-12">
                  <label class="control-label" for="direccion">Direccion</label>  
                  <input id="direccion" name="direccion" type="text" placeholder="Direccion" class="form-control input-md" required="">
               </div>
               <!-- Text input-->
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="departamento">Departamento</label> 
                  <input id="departamento" name="departamento" type="text" placeholder="Departamento" class="form-control input-md" required="">
               </div>
               <!-- Text input-->
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="provincia">Provincia</label>  
                  <input id="provincia" name="provincia" type="text" placeholder="Provincia" class="form-control input-md" required="">
               </div>
               <!-- Text input-->
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="distrito">Distrito</label>  
                  <input id="distrito" name="distrito" type="text" placeholder="Distrito" class="form-control input-md" required="">
               </div>
               <!-- Text input-->
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="area">Area</label>  
                  <input id="area" name="area" type="text" placeholder="Area" class="form-control input-md" required="">
               </div>
               <div style="margin-top:1%" class="col-md-12">
                   <div id="mapid"></div>
               </div>
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="latitud">Latitud</label>  
                  <input id="latitud" name="latitud" type="number" step="any" class="form-control input-md" required="">
               </div>
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="longitud">Longitud</label>  
                  <input id="longitud" name="longitud" type="number" step="any" class="form-control input-md">
               </div>
               <!-- Text input-->
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="telefono">Telefono</label>  
                  <input id="telefono" name="telefono" type="tell" placeholder="Telefono" class="form-control input-md" required="">
               </div>
               <!-- Text input-->
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="correo">Correo</label>  
                  <input id="correo" name="correo" type="mail" placeholder="Correo" class="form-control input-md" required="">
               </div>
               <!-- File Button --> 
               <div style="margin-top:1%" class="col-md-6">
                  <label class="control-label" for="imagen">Imagen</label>
                  <input id="imagen" name="imagen" class="input-file" type="file">
               </div>
               <!-- Textarea -->
               <div style="margin-top:1%" class="col-md-12">
                  <label class="control-label" for="descripcion">Descripcion</label>
                  <textarea class="form-control" id="descripcion" name="descripcion">Agregue la descripción de su servicio </textarea>
               </div>
               
            </fieldset>
         </form>
         <div class="col-md-12" style="padding-top: 1%;">
            <div class="text-center">
               <button id="buttonSend" name="buttonSend" class="btn btn-primary btn-lg">Enviar <span class="glyphicon glyphicon-send" aria-hidden="true"></span></button>
            </div>
         </div>
         
      </div>
      <div>
   </body>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/bootstrap/app.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/toastr/toastr.min.js"></script>

   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/leaflet.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/utils.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/sendForm.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/add.js"></script>
      
</html>

