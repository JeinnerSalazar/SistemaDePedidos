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
                    $resultado_c = mysqli_query($conexion, $consulta_c) or die("No se consultaron los clientes");
                    while($cliente = mysqli_fetch_array($resultado_c)){

                    
                ?>
                <tr>
                    <td><?php echo $cliente['nombre']; ?></td>
                    <td><?php echo $cliente['identificacion']; ?></td>
                    <td><?php echo $cliente['direccion']; ?></td>
                    <td><?php echo $cliente['telefono']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
                    <td><?php echo $cliente['ciudad']; ?></td>
                    <td><img src="img/editar.png" width="25" style="cursor: pointer;" title="Editar" alt="" onclick="window.location = 'clientes.php?id_cliente=<?php echo $cliente['id_cliente']; ?>'"></td>
                    <td><img src="img/borrar.png" width="25" title="Borrar" style="cursor: pointer;" onclick="borrarcliente(<?php echo $cliente['id_cliente']; ?>);" alt=""></td>
                </tr>
                <?php } ?>
            </table>
        </div>