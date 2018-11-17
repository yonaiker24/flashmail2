function validar(){
    var nombres;
    var apellidos;
    var email;
    var contraseña;
    var repiteContraseña;
    var fechaNacimiento ;
    var direccion;
    var direcion2;
    var ciudad;
    var estado;
    var codigoPostal;
    
    var expresionEmail;
    var expresionContraseña;
    var expresionLetras;
    
    
    
    expresionEmail =/\w+@+\w+\.+[a-z]/;
    expresionContraseña = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,20}$/;
    expresionLetras = /^[a-zA-Z ]*$/;

    nombres = document.getElementById("nombres").value;
    apellidos = document.getElementById("apellidos").value;
    email = document.getElementById("email").value;
    contraseña = document.getElementById("contraseña").value;
    repiteContraseña = document.getElementById("repiteContraseña").value;
    fechaNacimiento = document.getElementById("fechaNacimiento").value;
    ciudad = document.getElementById("ciudad").value;
    estado = document.getElementById("estado").value;
    codigoPostal = document.getElementById("codigoPostal");
    
    var edad = Edad(fechaNacimiento);

    
    if(nombres === "" || apellidos === "" || email === "" || contraseña === "" || repiteContraseña==="" || fechaNacimiento==="" || estado==="" || ciudad==="" || direccion===""){
        alert("Verifica que todos los campos esten llenos");
        return false;
    }else if (!expresionLetras.test(nombres) || !expresionLetras.test(apellidos) || !expresionLetras.test(ciudad) || !expresionLetras.test(estado)){
        alert("campos(nombre,apellidos,ciudad,estado) solo llevan letras");
        return false;
    }else if(nombres.length>40 || apellidos.length>40){
        alert("los nombres o los apellidos son muy largos");
        return false;
    }else if(email.length>100){
        alert("el correo es muy largo");
        return false;
    }else if(!expresionEmail.test(email)){
        alert("el correo no es valido");
        return false;
    }else if(edad < 18){
        alert("debe ser mayor de edad para registrarse");
        return false; 
    }else if(contraseña.length>20 || repiteContraseña.length>20){
        alert("la contraseña solo debe tener 20 caracteres como maximo");
        return false;
    }else if(!expresionContraseña.test(contraseña)){
        alert("la contraseña debe tener almenos: minimo de 8 caracteres,1 letra mayuscula , 1 minuscula , 1 caracter especial");
        return false;
    }else if(contraseña != repiteContraseña){
        alert("las contraseñas colocadas no coinciden");
        return false;
    }
    
}

function Edad(FechaNacimiento) {

    var fechaNace = new Date(FechaNacimiento);

    var fechaActual = new Date()

    var mes = fechaActual.getMonth();

    var dia = fechaActual.getDate();

    var año = fechaActual.getFullYear();

    fechaActual.setDate(dia);
    fechaActual.setMonth(mes);
    fechaActual.setFullYear(año);
    edad = Math.floor(((fechaActual - fechaNace) / (1000 * 60 * 60 * 24) / 365));
    return edad;
}
