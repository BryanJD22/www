<?php
    class C_Usuarios extends Controlador{
        public function __construct(){
            parent::__construct();
        }

        public function validarUsuario($datos){
            $usuario='';
            $pass = 'srfdvsvwrt';
            extract($datos);
            $valido='N';
            if ($usuario=='javier' && $pass=='') {
                $mensa = 'Debe completar los campos';
        
            }else{
                require_once 'controladore/C_Usuarios.php';
                $objUsuarios = new C_Usuarios();


            }
        }

    }

?>