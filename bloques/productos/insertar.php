<?php
   require_once('../../conexion.php');

   if (isset($_POST['boton'])) {

    $marca = $_POST['marca'];
    $referencia = $_POST['referencia'];
    $cantidad = $_POST['cantidad'];

    $insertar = "INSERT into productos(marca, referencia, cantidad) values('$marca', '$referencia', '$cantidad')";

    mysqli_query($conexion, $insertar) or die('no inserto producto');

    header ("location: ../../productos.php");
   }
?>