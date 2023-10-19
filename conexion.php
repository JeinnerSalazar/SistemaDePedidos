<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bd = "sistemapedidos";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die('No se conecto a mysql');
    mysqli_select_db($conexion, $bd) or die('No se conecto a la base de datos');

?>