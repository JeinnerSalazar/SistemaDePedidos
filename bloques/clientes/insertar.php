<?php
   require_once('../../conexion.php');

   if (isset($_POST['boton'])) {

    $nombre = $_POST['nombre'];
    $identificacion = $_POST['identificacion'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $ciudad = $_POST['ciudad'];

    $insertar = "INSERT into clientes(nombre, identificacion, direccion, telefono, email, ciudad) values('$nombre', '$identificacion', '$direccion', '$telefono', '$email', '$ciudad')";

    mysqli_query($conexion, $insertar) or die('no inserto cliente');

    header ("location: ../../clientes.php");
   }
?>