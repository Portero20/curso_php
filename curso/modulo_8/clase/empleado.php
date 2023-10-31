<?php

    require_once('clase_persona.php');
    require_once('operaciones.php');

    class Empleado extends Persona{

        use Operaciones;

        public function __construct(

            public string $cargo = "",
            public string $horario = ""

        ){}

        function cocinar() {

            echo $this->validarRFC();
                

        }

    }


?>