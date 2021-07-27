const hamburguer = document.querySelector('.hamburguesa');
const contMovil = document.querySelector('.contMovil');
const fondo = document.querySelector('.fondo');
const transparente = document.querySelector('.transparente');


let menuBar = 0;



document.addEventListener('click', function(evento) {
    var hidebox = hamburguer.contains(evento.target);

    if (hidebox) { // El Hidebox es el que reconoce la accion del boton Hamburguesa
        menuBar++;
        nav_Mobile();
    };
});

document.addEventListener('click', function(backg_color) {
    var backg_out = transparente.contains(backg_color.target);
    if (backg_out) {
        menuBar = 0;
        console.log("OMG its beyoncé");
        nav_Mobile();
    };
});


function nav_Mobile() {
    if (menuBar === 1) {
        hamburguer.classList.add("activa");
        contMovil.classList.add("left");
        fondo.classList.add("activa");
        console.log("Hamburguesa con queso");
        transparente.classList.add("activa");
    } else {
        hamburguer.classList.remove("activa");
        contMovil.classList.remove('left');
        fondo.classList.remove("activa");
        transparente.classList.remove("activa");
        menuBar = 0;
        console.log("Hamburguesa sin queso");
    }
}