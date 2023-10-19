function abrirformulario(dato){
    if (dato == "abrir") {
    document.getElementById("formulario").style.display = "block";
}

    if (dato == "cerrar") {
    document.getElementById("formulario").style.display = "none";
}
}

function borrarcliente(cid){
    var mensaje = confirm("¿Esta seguro de borrar el cliente?");

    if (mensaje==true){
        window.location = "bloques/clientes/borrar.php?id_cliente=" + cid;
    }
}

function borrarusuario(uid){
    var mensaje = confirm("¿Esta seguro de borrar el usuario?");

    if (mensaje==true){
        window.location = "bloques/usuarios/borrar.php?id=" + uid;
    }
}

