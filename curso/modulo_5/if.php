<?php


    $promedio = 10;
    $tieneFaltas = "No";

    if($promedio >=10 && $tieneFaltas == "No") {

        echo "Aprobaste la materia";

    } else if($tieneFaltas == "Si") {

        echo "Tienes faltas y no puedes rendir";

    } else {

        echo "Desaprobaste la materia";

    }


?>