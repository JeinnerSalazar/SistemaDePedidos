<?php

include("conexion.php");

//Acceso
if (isset($_POST['acceso'])) {
	if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1) {
		$usuario = trim($_POST['usuario']);
		$contrasena = trim($_POST['contrasena']);

		$query = mysqli_query($conex,"SELECT * FROM login WHERE usuario = '$usuario' AND contrasena = '$contrasena'");
		$nr = mysqli_num_rows($query);
		if ($nr==1) {
			?>
			echo "<script> alert('Inicio de sesión exitoso'); window.location='inicio.php' </script>";
			<?php 
		} else {
			?>
			<h3 class="bad">¡Acceso no exitoso!</h3>
			<?php
		} 
}
}

//Registro
if (isset($_POST['registrar'])) {
	if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1) {
		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
		$usuario = trim($_POST['usuario']);
		$contrasena = trim($_POST['contrasena']);
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO usuarios(nombre, correo, usuario, contrasena, fechareg) VALUES ('$nombre','$correo','$usuario','$contrasena','$fechareg')";
		$resultado1 = mysqli_query($conexion,$consulta);
		if ($resultado1) {
			?>
			echo "<script> alert('Te has registrado correctamente'); window.location='index.php' </script>";
			<?php 
		} 
	}   else {
		?>
			<h3 class="bad">¡Por favor complete todos los campos!</h3>
			<?php 

	}
}

?>