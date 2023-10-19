<?php
    require_once('../../conexion.php');

    $cid=$_GET['id_cliente'];

    $borrar = "DELETE from clientes where id_cliente = $cid";
    mysqli_query($conexion, $borrar) or die ('No se borro cliente');

    header("location:../../clientes.php");

?>