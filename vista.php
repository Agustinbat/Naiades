<?php
include("config/config.php");
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Naiades - Ejercicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="assets/stylesheets/bootstrap.min.css" />
        <script src="assets/javascripts/modernizr.min.js"></script>
    </head>
    <body>
        <div class="container">
            <section>
                <h1 class="text-center" style="background:#000;padding:20px;">
                    <img src="assets/images/logo.png" alt="Naiades" />
                </h1>
        		<h2>Vista</h2>
            	<div class="row">
            		<div class="col-sm-12">
                        <a href="formulario.php" class="btn btn-success">Nuevo</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <script src="assets/javascripts/jquery.min.js"></script>
        <script src="assets/javascripts/bootstrap.min.js"></script>
    </body>
</html>
