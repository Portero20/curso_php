<?php 

    require_once('clase_persona.php');
    require_once('operaciones.php');

    class Proveedor extends Persona{

        use Operaciones;

        public function __construct(            
            
            public string $cuenta = "",
            public string $banco = ""
        
        
        ) {}

        function productos() {

            echo $this->validarRFC();

        }

    }


?>