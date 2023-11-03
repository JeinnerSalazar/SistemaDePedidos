<form method="post" action="insertarpedido.php?control=2" style="display: none;" id="formpedido">
<input type="hidden" name="productos" value='<?php echo $productos; ?>'>  
<input type="hidden" name="referencias" value='<?php echo $referencias; ?>'> 
<input type="hidden" name="cantidades" value='<?php echo $cantidades; ?>'> 

<div class="row">
    <div class = "col-lg-3">Fecha:</div>
    <div class = "col-lg-3">
    <?php
    date_default_timezone_set('America/Bogota');
    echo date ("y-m-d");
    ?>
    <input type="hidden" name="fecha" value="<? echo date ('y-m-d'); ?>">
    </div>
    <div class = "col-lg-3">Cliente:</div>
    <div class = "col-lg-3">
        <select name="cliente" class="form-control form-select">
            <?php
            $concli= "SELECT * from clientes order by nombre";
            $rescli= mysqli_query($conexion, $concli) or die ('no se consulto cliente');
            while($cliente = mysqli_fetch_array($rescli)) {
                ?>
                <option value="<?php echo $cliente['id_cliente']; ?>" label="<?php echo $cliente['nombre']; ?>"><?php echo $cliente['nombre']; ?></option>
        <?php    } ?>
        </select>
</div>
</div>
    <div class="col-lg-3"></div>
    <div class="col-lg-3">
        <input type="submit" name="boton2" value="Guardar pedido" class="btn btn-primary">
    </div>
</form>
