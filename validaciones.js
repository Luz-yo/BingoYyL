function validaciones(){
    var usuario, contrasena;
    usuario = document.getElementById("usuario").value;
    contrasena = document.getElementById("contrasena").value;
    
    
    if(usuario == "" || contrasena == ""){
        alert("Todos los campos son OBLIGATORIOS");
        return false;
    } else if(usuario.length<=7){
        alert("Usuario demasiado corto");
        return false;
    } else if(usuario.length>=21){
        alert("Usuario demasiado largo");
        return false;
    } else if(contrasena.length<=7){
        alert("Contraseña demasiado corta");
        return false;
    } else if(contrasena.length>=21){
        alert("Contraseña demasiado larga");
        return false;
    }
}
              
              
