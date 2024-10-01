<?php
//capturar ruta
$array = explode("/", $_SERVER["REQUEST_URI"]);

if (count(array_filter($array)) == 1) {
    $json = array(
        "detalle" => "Sin Solicitudes",
    );
    echo json_encode($json, true);
} else {
    // peticion api
    if (Count(array_filter($array)) == 2) {
        /*cursos*/
        if (array_filter($array)[2] == "cursos") {
            /*ver listas de cursos* */
            if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
                $cursos = new ControladorCursos();
                $cursos->index();
            }
        }
    }
}
