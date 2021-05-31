<?php

    conectarBaseDatos();
    guardarDatosEnBase($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email)

    function conectarBaseDatos()  {
		
		$host = "localhost";
		$usr = "mfazcue";
		$pas = "1234";
		$dbase = "parcial";
		$db = new mysqli($host, $usr, $pas, $dbase);
		 
		if (mysqli_connect_error()) {
			die('Error de conexión ('.mysqli_connect_errno().') '.mysqli_connect_error());
		}

		return $db;	

    }

    function guardarDatosEnBase ($nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email) {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $edad = $_POST['edad'];
        $fechaDeNacimiento = $_POST['fechaNacimiento']; 
        $email = $_POST['email'];     
    
    }

?>