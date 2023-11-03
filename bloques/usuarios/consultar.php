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
                    <td><?php 
                            if($usuario['estado']==0){
                                echo "No Activo";
                            }else{
                                echo "Activo";
                            }
                        ?>
                    </td>
                    <td><img src="img/editar.png" width="25" style="cursor: pointer;" title="Editar" alt="" onclick="window.location = 'usuarios.php?id=<?php echo $usuario['id']; ?>'"></td>
                    <td><img src="img/borrar.png" width="25" title="Borrar" style="cursor: pointer;" onclick="borrarusuario(<?php echo $usuario['id']; ?>);" alt=""></td>
                </tr>
                <?php } ?>
            </table>
        </div>