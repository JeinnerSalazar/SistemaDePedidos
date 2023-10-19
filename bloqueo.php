<?php
    session_start();
    $usuario = $_SESSION['usuario'];

    $consulta = "SELECT * from usuarios where id = '$usuario'";
    $resultado = mysqli_query($conexion,$consulta) or die('No se consulto el usuario');
    $user = mysqli_fetch_array($resultado);

    if($user['id'] != "") {
            $dato = "Ingreso";
        }else{
            header("location: index.php");
        }

?>  