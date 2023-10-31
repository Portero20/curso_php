<?php 

    //replace

    // $RFC = "95 75 1A EC C7";

    // $buscar = " "; 

    // $reemplazar = ":";

    // $resultado = str_replace($buscar,$reemplazar,$RFC); 

    // echo $resultado;

    //Date 

    $anio = "2000";

    $mes = "07";

    $dia = "28";

    $formato = "%s-%s-%s";

    echo sprintf($formato,$dia,$mes,$anio);

?>