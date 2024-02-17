<?php

    include("../config/config.php");

    // Guardamos la consulta hecha en la base de datos en una variable
    $r = mysqli_query($base, "SELECT * FROM usuarios");

    $d = array();

    if ($r) {
        // Nos fijamos si la consulta devuelve filas y en el caso de que lo haga lo guardamos en un array
        if ($r->num_rows > 0) {
            while ($row = $r->fetch_assoc()) {
                $d[] = $row;
            }
        }
        // Nos aseguramos de volver el resultado en formato json
        header('Content-Type: application/json');
        echo json_encode($d);
    } else {
        // Manejo de errores en la consulta
        header('Content-Type: application/json');
        http_response_code(500); // Código de estado HTTP para "Internal Server Error"
        echo json_encode(array("error" => "Error ejecutando la consulta."));
    }

?>
