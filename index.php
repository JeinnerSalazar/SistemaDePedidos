<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de pedidos</title>
	<link rel="stylesheet" href="css/index.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer required="required"></script>
</head>
<body>
	<form action="login.php" method="post">
	<section class="form-login">
		<h5>Iniciar sesión</h5>
		<input class="controls" type="text" name="usuario" value="" placeholder="&#x1f511; Usuario">
		<input class="controls" type="password" name="contrasena" value="" placeholder="&#128274; Contraseña">
		<div class="g-recaptcha" data-sitekey="6LdOLYgoAAAAAGSrTDXfhiUijpCwvTlgCavBaXg8" required="required"></div>
		<br>
		<input class="buttons" type="submit" name="acceder" value="Ingresar">
	</section>
	</form>
</body>
</html>