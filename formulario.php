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
                <form id="formulario">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="apellido" class="control-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido" value="" maxlength="100" id="apellido" placeholder="Apellido">
                        </div>
                        <div class="form-group col-sm-12">
                            <button class="btn btn-success btn-lg btn-submit" >Guardar</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <script src="assets/javascripts/jquery.min.js"></script>
        <script src="assets/javascripts/bootstrap.min.js"></script>
    </body>
</html>


<script>
        $(document).ready(function(){
            $('#formulario').submit(function(event){
                event.preventDefault(); // Evitamos que se envie el formulario por defecto
                var formData = $(this).serialize();
                // Enviamos los datos a Ajax
                $.ajax({
                    url: './ax/formulario.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response){
                        // Hacemos una redireccion a la vista.php en caso de éxito
                        window.location.href = 'vista.php';
                    },
                    error: function(xhr, status, error){
                        console.error('Error al enviar los datos:', error);
                        console.log(xhr.responseText);
                        // Nos ayuda a ver en la consola en el caso de que haya errores y los podemos manejar para que lo vea el usuario tambien
                    }
                });
            });
        });
    </script>