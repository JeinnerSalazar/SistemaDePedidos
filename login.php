<?php
    session_start();
    require_once('conexion.php');

    if(isset($_POST['acceder'])){

        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        
        $consulta = "SELECT * from usuarios where usuario = '$usuario' and contrasena = '$contrasena'";
        $resultado = mysqli_query($conexion,$consulta) or die('No se consulto el usuario');
        $user = mysqli_fetch_array($resultado);

        // CAPTCHA
        //$ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $secretkey = "6LdOLYgoAAAAAPyaDwZNlKUcJXX9YSYGKH-VxZFl";

        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha");

        $atributos = json_decode($respuesta, TRUE);

        if(!$atributos['success']){
            ?>
			echo "Complete el captcha"
			<?php 
        }

         if($user['id'] != "" && $user['estado'] == 1) {
             $_SESSION['usuario'] = $user['id'];
             header("location: inicio.php");
         }else{
             header("location: index.php");
         }
     }else{
         header("location: index.php");
    }


?>