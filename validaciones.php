<?php

    function controlarDatos($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email) {
        if (!validarTextosVacios($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email)) {
            return false;
        }

        if (!validarNumeros($edad)) {
            return false;        
        }

        if (!nombreYapellidoDiferente($nombre, $apellido)) {
            return false;                
        }        

        return true;
    }

    function validarTextosVacios($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email){
        if($nombre === "" || $apellido === "" || $telefono === "" || $edad === "" || $fechaDeNacimiento === "" || $email === ""){
            return false;
        }
        return true;
    }

    function validarNumeros($edad){
        if(!is_numeric($edad)){
            return false;
        }
        return true;
    }

    function nombreYapellidoDiferente($nombre, $apellido){
        if($nombre != $apellido){
            return false;
        }
        return true;
    }

?>