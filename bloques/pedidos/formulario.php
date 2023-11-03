<!-- Formulario -->

<h4>Ingresar productos</h4>

<form method="post" action="insertarpedido.php?control=1">
    <div class="row">
        <div class="col-lg-12">
        <select name="producto" class="form-control form-select">
            <?php
                $conpedido2 = "SELECT * from productos order by marca";
                $respedido2 = mysqli_query($conexion, $conpedido2) or die ('No se consulto producto 2');
                while($pedido2 = mysqli_fetch_array($respedido2)) {
                    ?>
                    <option value="<?php echo $pedido2['id_producto']; ?>" label="<?php echo $pedido2['marca']; ?>">label="<?php echo $pedido2['marca']; ?>"</option>
            <?php    }   ?>
        </select>
        <br>
        <input type="number" class="form-control" name="cantidad" required="required" placeholder="cantidad" min="1" value="1">
        <br>
        <input type="submit" name="boton" value="Enviar" class="btn btn-primary">
    </div>
</div>
</form>