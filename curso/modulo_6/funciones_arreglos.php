<?php 


    //Funciones en arreglos
    //Count

    $alumnos = ["Exequiel", "Daniel", "Antonio"];

    $datos = [

        "Nombre" => "Exequiel",
        "Apellido" => "Portero",
        "Edad" => "29",

    ];

    // var_dump(count($alumnos));
    // var_dump(count($datos));

    //Asort

    // asort($alumnos);
    // asort($datos);
    // var_dump($alumnos);
    // var_dump($datos);

    //Arsort

    // arsort($alumnos);
    // arsort($datos);
    // var_dump($alumnos);
    // var_dump($datos);


    //array_search

    // $index = array_search("Exequiel", $alumnos);
    // $key = array_search("29", $datos);

    // var_dump($alumnos[$index]);

    // var_dump($datos[$key]);

    // var_dump(array_search("Exequiel",$alumnos));
    // var_dump(array_search("29",$datos));
    
    //Método replace

    $alumnosCorrecion = array_replace($alumnos, [
        0=>"Marcos",
    ]);

    $datosCorrecion = array_replace($datos, [
        "Apellido"=>"Bordon",
    ]);

    var_dump($alumnosCorrecion);

    var_dump($datosCorrecion);

?>