<?php
//capturar ruta
$array = explode("/", $_SERVER["REQUEST_URI"]);

if (count(array_filter($array)) == 1) {
    $json = array(
        "detalle" => "Sin Solicitudes",
    );
    echo json_encode($json, true);

} else {


    if (Count(array_filter($array)) == 2) {
        $json = array(
            "detalle" => "con Solicitudes",
        );
    }
    echo json_encode($json, true);

    
}


