<?php 

    if(!isset($_REQUEST["controller"])) {

        require_once("../controller/usuario_controlador.php");
        $controlador = new UsuarioControlador();
        $controlador->indexUsuario();

    }else {

        $controlador = $_REQUEST["controller"];

        $accion = $_REQUEST["accion"];
    
        require_once("../controller/$controlador"."_controlador.php");
    
        $controlador = ucwords($controlador)."Controlador";

        $controlador = new $controlador;

        call_user_func([$controlador, $accion]);


    }

?>