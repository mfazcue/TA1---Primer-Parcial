<?php

    function controlarDatos($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email) {
        if (!validarTextosVacios($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email)) {

        }

        if (!validarNumeros($edad)) {

        }

        if (!nombreYapellidoDiferente($nombre, $apellido)) {
                        
        }        

        return true;
    }

    function validarTextosVacios($datos){
        if($datos['nombre'] === "" || $datos['apellido'] === "" || $datos['edad'] === "" || $datos['email'] === ""){
            return false;
        }
        return true;
    }

    function validarNumeros($numero){
        if(!is_numeric($numero)){
            return false;
        }
        return true;
    }

    function nombreYapellidoDiferente($nombre, $apellido){
        if(!is_numeric($numero)){
            return false;
        }
        return true;
    }

?>