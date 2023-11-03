<button name="botoninsertar" value="insertar" type="button" class="btn btn-primary" onclick="abrirformulario('abrir')">Crear nuevo producto</button>
<br><br>
<div id="formulario" style="display: none;"> 
<form action="bloques/productos/insertar.php" method="post">
    <table>
            <tr>
            <th>Marca</th>
            <td><input type="text" name="marca" required="required" placeholder="Marca" class="form-control"></td>
        </tr>
        <tr>
            <th>Referencia</th>
            <td><input type="text" name="referencia" required="required" placeholder="Referencia" class="form-control"></td>
        </tr>
        <tr>
            <th>Cantidad</th>
            <td><input type="tel" name="cantidad" required="required" placeholder="Cantidad" class="form-control"></td>
        </tr>
        <tr>
            <th>
            <button name="botoninsertar" value="insertar" type="button" class="btn" style="background-color: gray;" onclick="abrirformulario('cerrar')">Cancelar</button>
            </th>
            <td><input type="submit" name="boton" value="Guardar producto" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
</div>      