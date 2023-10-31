<?php

    //Parámetros y Argumentos

    $anio = 1994;

    function obtenerEdad($anio, $anioActual = 2023) {

        $edad = $anioActual - $anio;

        echo "Mi edad es: $edad";

    }

    obtenerEdad(2000,2023);
    obtenerEdad(2000);


?>
