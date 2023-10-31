<?php 

    //Jerarquía

    // $edad = 20;

    // $traeCredencial = "No";

    // $puedeVotar = $edad>=18 AND $traeCredencial == "Si";

    // var_dump($puedeVotar);

    //Hacer que se respete AND

    $edad = 20;

    $traeCredencial = "No";

    $puedeVotar = ($edad>=18 and $traeCredencial == "Si");

    var_dump($puedeVotar);

?>