<?php 

    //heredoc

    $saludo = "Hola";

    $frase = <<<Frase
    $saludo "No cuentes los días, haz que los días cuenten".
    Frase;

    //nowdoc

    echo <<<'Frase'
    $saludo "No cuentes los días, haz que los días cuenten".
    Frase;

    echo $frase;

?>