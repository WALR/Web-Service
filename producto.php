<?php
    require_once('lib/nusoap.php');
      
    function getProd($categoria) {
        if ($categoria == "libros") {
            return join(",", array(
                "El señor de los anillos",
                "Los límites de la Fundación",
                "The Rails Way"));
        }
        else if ($categoria == "peliculas") {
            return join(",", array(
                "300",
                "Da vinci",
                "Troya"));
        }

        else {
                return "No hay datos de esta categoria";
        }
    }

    function get_name($nombre)
    {
        return "hola ".$nombre;
    }
      
    $server = new soap_server();
    $server->register("getProd");
    $server->service($HTTP_RAW_POST_DATA);
?>