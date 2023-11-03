<?php
    require_once('../../conexion.php');

    $pid=$_GET['id_producto'];

    $borrar = "DELETE from productos where id_producto = $pid";
    mysqli_query($conexion, $borrar) or die ('No se borro producto');

    header("location:../../productos.php");

?>