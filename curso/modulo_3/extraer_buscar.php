<?php 

    //substr()

    // $apellido = substr('ExequielDP', 0, -2);

    // echo $apellido;

    //strpos()

    $bienvenida = "Bienvenido al mundo de la programación hola programación";

    $palabra = "programación";

    $buscar = strpos($bienvenida,$palabra,27);

    $extracion = substr($bienvenida, $buscar);

    echo $extracion;

?>