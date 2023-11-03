<?php

    $pid = $_GET['id_producto'];

    //consulto al producto

    $conproducto = "SELECT * from productos where id_producto = $pid";
    $resproducto = mysqli_query($conexion, $conproducto) or die ('no se consulto producto');
    $producto = mysqli_fetch_array($resproducto);

    //editar producto
    if(isset($_POST['boton'])) {

    $pid = $_POST['id_producto'];
    $marca = $_POST['marca'];
    $referencia = $_POST['referencia'];
    $cantidad = $_POST['cantidad'];

    $editar = "UPDATE productos set marca='$marca', referencia='$referencia', cantidad='$cantidad' where id_producto=$pid";

    mysqli_query($conexion, $editar) or die('no inserto producto');

    echo "<script>window.location = 'productos.php'</script>";
    }
?>

<div id="formulario"> 
<form action="productos.php?id_producto=<?php echo $producto['id_producto']; ?>" method="post">
    <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto']; ?>">
    <table>
        <tr>
            <th>Marca</th>
            <td><input type="text" name="marca" value="<?php echo $producto['marca']; ?>" required="required" placeholder="Marca producto" class="form-control"></td>
        </tr>
            <tr>
            <th>Referencia</th>
            <td><input type="text" name="referencia" value="<?php echo $producto['referencia']; ?>" required="required" placeholder="Referencia producto" class="form-control"></td>
        </tr>
        <tr>
            <th>Cantidad</th>
            <td><input type="text" name="cantidad" value="<?php echo $producto['cantidad']; ?>" required="required" placeholder="Cantidad" class="form-control"></td>
        </tr>
        <tr>
            <th>
            <button name="botoninsertar" value="insertar" type="button" class="btn" style="background-color: gray;" onclick="window.location ='productos.php'">Cancelar</button>
            </th>
            <td><input type="submit" name="boton" value="Editar producto" class="btn btn-primary"></td>
        </tr>
    </table>
</form>

<br>
<div id="consulta">
            <table width="100%" border="1" cellspacing="0">   
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Referencia</th>
                    <th>Cantidad</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
                <?php
                    $consulta_p ="SELECT * from productos order by id_producto";
                    $resultado_p = mysqli_query($conexion, $consulta_p) or die("No se consulto los cliente");
                    while($producto = mysqli_fetch_array($resultado_p)){

                    
                ?>
                <tr>
                    <td><?php echo $producto['id_producto']; ?></td>
                    <td><?php echo $producto['marca']; ?></td>
                    <td><?php echo $producto['referencia']; ?></td>
                    <td><?php echo $producto['cantidad']; ?></td>
                    <td><img src="img/editar.png" width="25" title="Editar" style="cursor: pointer;" alt=""></td>
                    <td><img src="img/borrar.png" width="25" title="Borrar" style="cursor: pointer;" onclick="borrarproducto(<?php echo $producto['id_producto']; ?>);" alt=""></td>
                </tr>
                <?php } ?>
            </table>
        </div>