<div class="table-responsive">
                <table class="table align-middle">
                    <tr>
                        <th>Productos</th>
                        <th>Referencia</th>
                        <th>Cantidad</th>
                        <th></th>
                    </tr>

                    <?php
                        $largo = count($_SESSION['productos']);

                        if($largo > 0 ){
                            for($con=0; $con < $largo; $con++){

                    ?>

                    <tr>
                        <td>
                            <?php
                            $conpedido3 = "SELECT * from productos where id_producto = ". $_SESSION['productos'][$con];
                            $respedido3 = mysqli_query($conexion, $conpedido3) or die ("No se consulto pedido 3");
                            $pedido3 = mysqli_fetch_array($respedido3); 

                            echo $pedido3['marca'];
                            ?>
                            </td>
                        <td><?php echo $_SESSION['referencias'][$con]; ?></td>
                        <td><?php echo $_SESSION['cantidades'][$con]; ?></td>
                        <td>
                            <button class="btn btn-danger" id="boton">X</button>
                    </tr>
                    <?php
                         }
                    }
                    ?>
                </table>

                </div>