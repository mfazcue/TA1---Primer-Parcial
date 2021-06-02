<?php

  require_once 'validaciones.php';  

  $db = conectarBaseDatos();


    guardarDatosEnBase($db, $nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email)

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

    function guardarDatosEnBase ($db) {

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $edad = $_POST['edad'];
        $fechaDeNacimiento = $_POST['fechaNacimiento']; 
        $email = $_POST['email'];     		
        
        mysqli_query($db,"INSERT INTO formulario (nombre, apellido, telefono, edad, fechaDeNacimiento, email) VALUES 
        ('$nombre', '$apellido', '$telefono', '$edad', '$fechaDeNacimiento', '$email')");

        $id_insert = mysqli_insert_id ($db);

        if ($id_insert > 0) {
          echo "El formulario se guardó correctamente";
        } else {
          echo "Hubo un error al guardar los datos del formulario"
        }    
    
    }

?>