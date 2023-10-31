<?php 

    //Agregar, eliminar y modificar datos en un arreglo

    $alumnos = ["Exequiel", "Daniell", "Antonio"];

    $datos = [

        "Nombre" => "Exequiel",
        "Apellido" => "Porteroo",
        "Edad" => "29",

    ];

   array_push($alumnos,"Luis");

   $datos["Colonia"] = "Alegria";

   var_dump($alumnos);
   var_dump($datos);


   //Eliminar un dato


   unset($alumnos[1]);
   unset($datos["Edad"]);

   //Modificar un dato

   $alumnos[1] = "Daniel";
   $datos["Apellido"] = "Portero";


   var_dump($alumnos);
   var_dump($datos);


?>