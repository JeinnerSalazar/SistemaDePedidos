<?php

    $uid = $_GET['id'];

    //consulto al cliente

    $conusuario = "SELECT * from usuarios where id = $uid";
    $resusuario = mysqli_query($conexion, $conusuario) or die ('no se consulto el usuario');
    $eusuario = mysqli_fetch_array($resusuario);

    //editar cliente
    if(isset($_POST['boton'])) {

    $uid = $_POST['id'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $perfil = $_POST['perfil'];  
    $estado = $_POST['estado'];

    $editar = "UPDATE usuarios set nombre='$nombre', usuario='$usuario', contrasena='$contrasena', perfil='$perfil', estado='$estado' where id=$uid";

    mysqli_query($conexion, $editar) or die('no inserto usuario');

    echo "<script>window.location = 'usuarios.php'</script>";
    }
?>

<div id="formulario"> 
<form action="usuarios.php?id=<?php echo $eusuario['id']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $eusuario['id']; ?>">
    <table>
    <tr>
            <th>Nombre</th>
            <td><input type="text" name="nombre" value="<?php echo $eusuario['nombre']; ?>" required="required" placeholder="Nombre cliente" class="form-control"></td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td><input type="text" name="usuario" value="<?php echo $eusuario['usuario']; ?>" required="required" placeholder="Nombre usuario" class="form-control"></td>
        </tr>
        <tr>
            <th>Contraseña</th>
            <td><input type="text" name="contrasena" value="<?php echo $eusuario['contrasena']; ?>" required="required" placeholder="Contraseña" class="form-control"></td>
        </tr>
            <tr>
            <th>Perfil</th>
            <td>
                <select name="perfil" value="<?php echo $eusuario['perfil']; ?>" class="form-control form-select">
                    <option value="Administrador" label="Administrador">Administrador</option>
                    <option value="Usuario" label="Usuario">Usuario</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Estado - Activo</th>
            <td>
                SI:<input type="radio" name="estado" value="1" class="form-radio" checked="checked">
                NO:<input type="radio" name="estado" value="0" class="form-radio">
            </td>
        </tr>
        <tr>
            <th>
            <button name="botoninsertar" value="insertar" type="button" class="btn" style="background-color: gray;" onclick="window.location ='usuarios.php'">Cancelar</button>
            </th>
            <td><input type="submit" name="boton" value="Editar usuario" class="btn btn-primary"></td>
        </tr>
    </table>
</form>

<br>
<div id="consulta">
            <table width="100%" border="1" cellspacing="0">   
                <tr>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                <?php
                    $consulta_u ="SELECT * from usuarios order by nombre";
                    $resultado_u = mysqli_query($conexion, $consulta_u) or die("No se consultaron los usuarios");
                    while($usuario = mysqli_fetch_array($resultado_u)){

                    
                ?>
                <tr>
                    <td><?php echo $usuario['nombre']; ?></td>
                    <td><?php echo $usuario['usuario']; ?></td>
                    <td><?php echo $usuario['perfil']; ?></td>
                    <td><?php echo $usuario['estado']; ?></td>
                    <td><img src="img/editar.png" width="25" title="Editar" style="cursor: pointer;" alt=""></td>
                    <td><img src="img/borrar.png" width="25" title="Borrar" style="cursor: pointer;" onclick="borrarusuario(<?php echo $usuario['id']; ?>);" alt=""></td>
                </tr>
                <?php } ?>
            </table>
        </div>