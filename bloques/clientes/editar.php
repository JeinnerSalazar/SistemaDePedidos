<?php

    $cid = $_GET['id_cliente'];

    //consulto al cliente

    $concliente = "SELECT * from clientes where id_cliente = $cid";
    $rescliente = mysqli_query($conexion, $concliente) or die ('no se consulto cliente');
    $cliente = mysqli_fetch_array($rescliente);

    //editar cliente
    if(isset($_POST['boton'])) {

    $cid = $_POST['id_cliente'];
    $nombre = $_POST['nombre'];
    $identificacion = $_POST['identificacion'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $ciudad = $_POST['ciudad'];

    $editar = "UPDATE clientes set nombre='$nombre', identificacion='$identificacion', direccion='$direccion', telefono='$telefono', email='$email', ciudad='$ciudad' where id_cliente=$cid";

    mysqli_query($conexion, $editar) or die('no inserto cliente');

    echo "<script>window.location = 'clientes.php'</script>";
    }
?>

<div id="formulario"> 
<form action="clientes.php?id_cliente=<?php echo $cliente['id_cliente']; ?>" method="post">
    <input type="hidden" name="id_cliente" value="<?php echo $cliente['id_cliente']; ?>">
    <table>
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="nombre" value="<?php echo $cliente['nombre']; ?>" required="required" placeholder="Nombre cliente" class="form-control"></td>
        </tr>
            <tr>
            <th>Identificacion</th>
            <td><input type="text" name="identificacion" value="<?php echo $cliente['identificacion']; ?>" required="required" placeholder="No identificacion" class="form-control"></td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td><input type="text" name="direccion" value="<?php echo $cliente['direccion']; ?>" required="required" placeholder="Dirección" class="form-control"></td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td><input type="tel" name="telefono" value="<?php echo $cliente['telefono']; ?>" required="required" placeholder="Teléfono" class="form-control"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" value="<?php echo $cliente['email']; ?>" required="required" placeholder="Email" class="form-control"></td>
        </tr>
        <tr>
            <th>Ciudad</th>
            <td><input type="text" name="ciudad" value="<?php echo $cliente['ciudad']; ?>" required="required" placeholder="Ciudad" class="form-control"></td>
        </tr>
        <tr>
            <th>
            <button name="botoninsertar" value="insertar" type="button" class="btn" style="background-color: gray;" onclick="window.location ='clientes.php'">Cancelar</button>
            </th>
            <td><input type="submit" name="boton" value="Editar cliente" class="btn btn-primary"></td>
        </tr>
    </table>
</form>

<br>
<div id="consulta">
            <table width="100%" border="1" cellspacing="0">   
                <tr>
                    <th>Nombre</th>
                    <th>Identificacion</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Ciudad</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                <?php
                    $consulta_c ="SELECT * from clientes order by nombre";
                    $resultado_c = mysqli_query($conexion, $consulta_c) or die("No se consulto los cliente");
                    while($cliente = mysqli_fetch_array($resultado_c)){

                    
                ?>
                <tr>
                    <td><?php echo $cliente['nombre']; ?></td>
                    <td><?php echo $cliente['identificacion']; ?></td>
                    <td><?php echo $cliente['direccion']; ?></td>
                    <td><?php echo $cliente['telefono']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
                    <td><?php echo $cliente['ciudad']; ?></td>
                    <td><img src="img/editar.png" width="25" title="Editar" style="cursor: pointer;" alt=""></td>
                    <td><img src="img/borrar.png" width="25" title="Borrar" style="cursor: pointer;" onclick="borrarcliente(<?php echo $cliente['id_cliente']; ?>);" alt=""></td>
                </tr>
                <?php } ?>
            </table>
        </div>