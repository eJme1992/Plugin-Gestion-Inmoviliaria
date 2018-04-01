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
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
   </head><body style="background-color:#F1F1F1">
      <div class="container">
        <div class="row" style="margin-top:1%">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <b class="panel-title">Visor de mapa</b>
                    </div>
                    <div class="panel-body">
                        <div style="margin-top:1%" class="col-md-12">
                            <div id="mapid" style="height: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </body>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/bootstrap/app.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/min/toastr/toastr.min.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/mapView.js"></script>
   <script type="text/javascript" src="/wp-content/plugins/gestion-inmobiliaria-wp/assets/js/map.js"></script>
      
</html>

