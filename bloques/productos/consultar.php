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
                    $resultado_p = mysqli_query($conexion, $consulta_p) or die("No se consultaron los usuarios");
                    while($producto = mysqli_fetch_array($resultado_p)){

                    
                ?>
                <tr>
                    <td><?php echo $producto['id_producto']; ?></td>
                    <td><?php echo $producto['marca']; ?></td>
                    <td><?php echo $producto['referencia']; ?></td>
                    <td><?php echo $producto['cantidad']; ?></td>
                    <td><img src="img/editar.png" width="25" style="cursor: pointer;" title="Editar" alt="" onclick="window.location = 'productos.php?id_producto=<?php echo $producto['id_producto']; ?>'"></td>
                    <td><img src="img/borrar.png" width="25" title="Borrar" style="cursor: pointer;" onclick="borrarproducto(<?php echo $producto['id_producto']; ?>);" alt=""></td>
                </tr>
                <?php } ?>
            </table>
        </div>