<?php 

    require_once('clase_persona.php');

    require_once('empleado.php');

    class Cliente extends Persona{

        public function __construct(

            public bool $esFrecuente = false,
            public string $correo = ""

        ){}

        function comer() {

            $this->setTelefono('3834901637');

            echo $this->getTelefono();

        }

        function saludar(Empleado $empleado) {

            echo "Felicidades chef ", $empleado->nombre;

        }

        function hablar($tema) {

            echo "Hola mi tema es: ", $tema;

        }

    }


?>