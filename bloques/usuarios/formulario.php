<button name="botoninsertar" value="insertar" type="button" class="btn btn-primary" onclick="abrirformulario('abrir')">Crear nuevo usuario</button>
<br><br>
<div id="formulario" style="display: none;"> 
<form action="bloques/usuarios/insertar.php" method="post">
    <table>
        <tr>
            <th>Nombre</th>
            <td><input type="text" name="nombre" required="required" placeholder="Nombre" class="form-control"></td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td><input type="text" name="usuario" required="required" placeholder="Nombre usuario" class="form-control"></td>
        </tr>
        <tr>
            <th>Contraseña</th>
            <td><input type="text" name="contrasena" required="required" placeholder="Contraseña" class="form-control"></td>
        </tr>
            <tr>
            <th>Perfil</th>
            <td>
                <select name="perfil" class="form-control form-select">
                    <option value="Administrador" label="Administrador">Administrador</option>
                    <option value="Usuario" label="Usuario">Usuario</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Estado - Activo</th>
            <td>
                SI:<input type="radio" name="estado" value="1" class="form-radio" checked="checked">
                NO:<input type="radio" name="estado" value="0" class="form-radio">
            </td>
        </tr>
        <tr>
            <th>
            <button name="botoninsertar" value="insertar" type="button" class="btn" style="background-color: gray;" onclick="abrirformulario('cerrar')">Cancelar</button>
            </th>
            <td><input type="submit" name="boton" value="Guardar usuario" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
</div>      