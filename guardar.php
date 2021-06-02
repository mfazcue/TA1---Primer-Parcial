<?php

  require_once 'validaciones.php';  

  $db = conectarBaseDatos();

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];
  $edad = $_POST['edad'];
  $fechaDeNacimiento = $_POST['fechaNacimiento']; 
  $email = $_POST['email'];     		

  if (controlarDatos()) {
      $retorno = guardarDatosEnBase($db, $nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email);

      if ($retorno == 1) {
        echo "Persona agregada correctamente";
      } else {
        header("HTTP/1.1 500 Internal server error");
        echo "Hubo un error en la base de datos";  
      }
  } else {
      header("HTTP/1.1 500 Internal server error");
      echo "Hubo un problema al procesar la solicitud";
  }

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

    function guardarDatosEnBase ($db, $nombre, $apellido, $telefono, $edad, $fechaDeNacimiento, $email) {

        mysqli_query($db,"INSERT INTO formulario (nombre, apellido, telefono, edad, fechaDeNacimiento, email) VALUES 
        ('$nombre', '$apellido', '$telefono', '$edad', '$fechaDeNacimiento', '$email')");

        $id_insert = mysqli_insert_id ($db);

        if ($id_insert > 0) {
            $retorno = 1;    
        } else {
            $retorno = 0;
        }    

        return $retorno;
    }

?>