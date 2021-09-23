let product_car = [];
var localDatos = localStorage.getItem('datos');
var data = JSON.parse(localDatos);
var datalength = data.length;
console.log(data);
console.log(datalength);
product_car = data;
carrito_count();
//Esta funcion especifica añadir el producto seleccionado por el cliente
function carrito_send(product_name, product_price, product_unit) {
    let objectProduct = {
        nombre: product_name,
        precio: product_price,
        unidad: product_unit
    };
    product_car.push(objectProduct);
    console.log(product_car);
    localStorage.setItem('datos', JSON.stringify(product_car));
    carrito_count();

};

//esta funcion especifica eliminar el producto seleccionado por el cliente
function carrito_del(product_name, product_price, product_unit, numList) {

    let objectProduct = {
        nombre: product_name,
        precio: product_price,
        unidad: product_unit
    };

    index = product_car.findIndex(x => x.nombre === product_name);
    console.log(index);
    console.log(objectProduct);

    if (index > -1) {
        product_car.splice(index, 1);
        console.log(product_car);
        carrito_count();
        localStorage.setItem('datos', JSON.stringify(product_car));

        var listado = document.getElementById(`listing-${numList}`);
        listado.parentNode.removeChild(listado);
        total = total - product_price;
        subtotales();
    }
    localStorage.setItem('datos', JSON.stringify(product_car));

}


function carrito_count() {
    conteo_carro = document.getElementById("conteo_carro");


    conteo_carro.innerHTML = product_car.length;
    if (product_car.length === 0) {
        conteo_carro.innerHTML = "";
    }


    console.log(data);

};