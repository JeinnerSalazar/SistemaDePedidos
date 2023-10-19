<button name="botoninsertar" value="insertar" type="button" class="btn btn-primary" onclick="abrirformulario('abrir')">Crear nuevo cliente</button>
<br><br>
<div id="formulario" style="display: none;"> 
<form action="bloques/clientes/insertar.php" method="post">
    <table>
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="nombre" required="required" placeholder="Nombre cliente" class="form-control"></td>
        </tr>
            <tr>
            <th>Identificacion</th>
            <td><input type="text" name="identificacion" required="required" placeholder="No identificacion" class="form-control"></td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td><input type="text" name="direccion" required="required" placeholder="Dirección" class="form-control"></td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td><input type="tel" name="telefono" required="required" placeholder="Teléfono" class="form-control"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" required="required" placeholder="Email" class="form-control"></td>
        </tr>
        <tr>
            <th>Ciudad</th>
            <td><input type="text" name="ciudad" required="required" placeholder="Ciudad" class="form-control"></td>
        </tr>
        <tr>
            <th>
            <button name="botoninsertar" value="insertar" type="button" class="btn" style="background-color: gray;" onclick="abrirformulario('cerrar')">Cancelar</button>
            </th>
            <td><input type="submit" name="boton" value="Guardar cliente" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
</div>      