<?php
   require_once('../../conexion.php');

   if (isset($_POST['boton'])) {

   $nombre = $_POST['nombre'];
   $usuario = $_POST['usuario'];
   $contrasena = $_POST['contrasena'];
   $perfil = $_POST['perfil'];  
   $estado = $_POST['estado'];
   $fechareg = date("d/m/y");

    $insertar = "INSERT into usuarios(nombre, usuario, contrasena, perfil, estado, fechareg) values('$nombre', '$usuario', '$contrasena', '$perfil', '$estado', '$fechareg')";

    mysqli_query($conexion, $insertar) or die('no inserto usuario');

    header ("location: ../../usuarios.php");
   }
?>