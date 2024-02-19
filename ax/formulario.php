<?php

    include("../config/config.php");

    // Verificamos si se recibieron bien los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hacemos validaciones de los datos recibidos, como por ejemplo que sean letras y no digitos
    if(!isset($_POST['apellido'])) die("error1");
	if(strlen($_POST['apellido'])<1) die("error2");
    if(ctype_digit($_POST['apellido'])) die("Error3");
	$_POST['apellido'] = mysqli_escape_string($base, $_POST['apellido']);
    $apellido = $_POST['apellido'];

    $sql = mysqli_query($base, "INSERT INTO usuarios
                                ( `apellido`, `fecha`) 
                                VALUES
                                ('$apellido', NOW() ) ");   // Completamos el campo apellido  con el dato que nos llego y el 
                                                            // campo fecha lo autocomplementamos nosotros con la funcion NOW


    if ($sql) {
        // Operación exitosa
        $respuesta = array('success' => true);
    } else {
        // Error al ejecutar la consulta
        $respuesta = array('success' => false, 'error' => mysqli_error($base));
    }
    } else {
        // No se recibieron datos del formulario
    $respuesta = array('success' => false, 'error' => 'No se recibieron datos del formulario');
    }

    // Devolver la respuesta en formato JSON
    header('Content-Type: application/json');
    echo json_encode($respuesta);


?>
