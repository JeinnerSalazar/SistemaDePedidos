<?php
    require_once('../../conexion.php');

    $uid=$_GET['id'];

    $borrar = "DELETE from usuarios where id = $uid";
    mysqli_query($conexion, $borrar) or die ('No se borro usuario');

    header("location:../../usuarios.php");

?>