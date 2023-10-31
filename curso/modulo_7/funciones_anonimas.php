<?php

    $mensaje = "La suma es de: ";

    $suma = function($numero1,$numero2) use ($mensaje){

        $resultado = $numero1 + $numero2;
        return "$mensaje $resultado";

    };


    echo $suma(100,100);


?>