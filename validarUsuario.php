<?php
    $usuario='';
    $pass='';
    $respuesta['valido'] = 'NO';
    $respuesta['msj']='No verificado';
    $respuesta['usuario']='';


    if (isset($_GET)) {
        extract($_GET);
        if ($usuario==''|| $pass=='') {
            $respuesta['msj']='Datos incorrectos. ERR-LG-01';

        }else{
            if ($usuario=='javier'&& $pass=='123') {
                $respuesta['valido']='SI';
                $respuesta['msj']='Usuario valido';
                $respuesta['usuario']='Javier';

            }else{
                $respuesta['msj'] = 'DATOS NO RECIBIDOS';
            }
        }

    }else{

    }

?>