<?php 

    //Return
    function obtenerEdad($anio,$anioActual=2023) {

        $edad = $anioActual - $anio;  

        return $edad;

    }

    $edad = obtenerEdad(2000,2010);
    echo "Mi edad es: $edad";


?>