<?php

    abstract class Persona {

        static $idioma;

        public function __construct(

            public int|string $nombre = 0,
            public string $apellido = "",
            public int|float $edad = 0,
            private string $telefono = ""
        
        ){}

        public function getTelefono() {

            return $this->telefono;
        
        }

        public function setTelefono($telefono) {

            return $this->telefono = $this->validarTelefono($telefono);

        }

        public function __get($name) {

            return $this->$name;

        }


        public function __set($name,$value) {

            switch($name) {

                case "telefono":
                    return $this->$name = $this->validarTelefono($value);

                default: 
                    return $this->$name = $value;    

            }
                    



        }

        function hablar($tema) {

            echo "Soy " , $this->nombre ," y hablo sobre el $tema", $this->temaEsExtenso($tema);

        }

        function ver() {



        }

        function cantar() {



        }

        private function temaEsExtenso($tema) {

            return ($tema == "Politica") ? "Es extenso" : "No es extenso";

        }

        private function validarTelefono($telefono) {

            if(preg_match('/^[0-9]{10}$/', $telefono)) {

                return $telefono;

            } else {

                echo "Estructura incorrecta";

            }

        }

        public function __destruct() {

            echo "Finaliza el objeto";

        }
        

    }


?>