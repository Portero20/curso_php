<?php 

    //Ternario

    // $promedio = 10;

    // $aprobo = ($promedio >=7) ? "Aprobaste" : "Reprobaste";
    
    // echo $aprobo;

    //Elvis Operator

    // $promedio = null;

    // $aprobo = ($promedio)?: 5;
    
    // echo $aprobo;

    //Fusion null

    $promedio;

    $aprobo = ($promedio)?? 5;
    
    echo $aprobo;

?>