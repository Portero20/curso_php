<?php

    $camisa = "Verde";

    echo match($camisa) {

        "Gris" => "Camisa gris",
        "Amarillo" => "Camisa Amarilla",
        "Rojo" => "Camisa roja",
        "Verde" => "Camisa verde",
    
    }


?>