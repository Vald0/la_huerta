var pass = document.getElementById("pass").value;









// console.log(pass);
// console.log(pass_2);


var err_name = document.getElementById("err_name");
var err_lastname = document.getElementById("err_lastname");
var err_mail = document.getElementById("err_mail");
var err_phone = document.getElementById("err_phone");
var err_address = document.getElementById("err_address");
var err_pass = document.getElementById("err_pass");


function validar() {
    let alerta = 0;

    var nombre, apellidos, correo, telefono, direccion, pass, pass_2;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    direccion = document.getElementById("direccion").value;
    pass = document.getElementById("pass").value;
    pass_2 = document.getElementById("pass_2").value;
    expresion = /\w+@\w+\.+[a-z]/;

    if (nombre === "" || nombre.length > 20) {
        err_name.innerHTML = " Por favor, escriba su Nombre correctamente.";


        alerta = 1;
        return false;
    } else {
        err_name.innerHTML = "";
    }
    if (apellidos === "") {
        err_lastname.innerHTML = " Por favor, escriba sus Apellidos";

        alerta = 1;
        return false;
    } else {
        err_lastname.innerHTML = "";
    }
    if (direccion === "") {
        err_address.innerHTML = " Por favor, escriba su Direccion";

        alerta = 1;
        return false;
    } else {
        err_address.innerHTML = "";
    }
    if (telefono === "" || telefono.length < 10 || isNaN(telefono)) {
        err_phone.innerHTML = " Por favor, escriba su numero en 10 Caracteres ";

        alerta = 1;
        return false;
    } else {
        err_phone.innerHTML = "";
    }

    if (correo === "" || !expresion.test(correo)) {
        err_mail.innerHTML = " Por favor, escriba su Correo de manera correcta";

        alerta = 1;
        return false;
    } else {
        err_mail.innerHTML = "";
    }
    if (pass === pass_2 || pass.length >= 7) {
        err_pass.innerHTML = " contraseña correcta";
    } else {
        err_pass.innerHTML = " la contraseña debe coincidir";

        return false;
    }
    console.log(pass);
    console.log(pass_2);

    if (alerta === 1) {
        alert("Verifique los campos del formulario, por favor.");
    }
}