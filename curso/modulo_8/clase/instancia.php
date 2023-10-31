<?php

    require_once("autoload.php");

    (new AutoCarga())->cargarRutas();

    $claseAnonima = new class{

        public $nombre;

        function suma() {
            
            echo 10 + 20;

        }

    };

    $claseAnonima->suma();



?>