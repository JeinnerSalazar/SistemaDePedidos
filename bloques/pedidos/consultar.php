<div id="consulta">
            <table width="100%" border="1" cellspacing="0">   
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <!-- <th>Cantidad</th>
                    <th>Editar</th>
                    <th>Borrar</th> -->
                </tr>
                <?php
                    $consulta_p ="SELECT * from pedidos order by id_pedido";
                    $resultado_p = mysqli_query($conexion, $consulta_p) or die("No se consulto el producto");
                    while($pedido = mysqli_fetch_array($resultado_p)){

                    
                ?>
                <tr>
                    <td><?php echo $pedido['id_pedido']; ?></td>
                    <td><?php echo $pedido['fecha']; ?></td>
                    <td>
                        <?php 

                        $pedido['producto'];
                                    $productos = unserialize($pedido['producto']);
                                    // $referencia = unserialize($pedido['referencia']);
                                    $cantidad = unserialize($pedido['cantidad']);

                                    $largo = count($productos);
                                    for($con=0; $con<$largo; $con++) { 
                        ?>
                        <div class="row">
                            <div class="col-lg-3">

                            <?php
                            $conpedido = "SELECT * from productos where id_producto = ". $productos[$con];
                            $respedido = mysqli_query($conexion, $conpedido) or die ("No se consulto pedido 3");
                            $pedido = mysqli_fetch_array($respedido); 

                            echo $pedido['marca'];
                            ?>

                            </div>
                            <div class="col-lg-3">Cantidad: <?php echo $cantidad[$con]; ?></div>
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3"></div>
                    </div>
                    <?php } ?>

                    </td>
                    <!-- <td><?php echo $pedido['cantidad']; ?></td>
                    <td><img src="img/editar.png" width="25" style="cursor: pointer;" title="Editar" alt="" onclick="window.location = 'usuarios.php?id=<?php echo $usuario['id']; ?>'"></td>
                    <td><img src="img/borrar.png" width="25" title="Borrar" style="cursor: pointer;" onclick="borrarusuario(<?php echo $usuario['id']; ?>);" alt=""></td> -->
                </tr>
                <?php } ?>
            </table>
        </div>