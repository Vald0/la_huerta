/**Creando lista para JS**/
data = JSON.parse(localStorage.getItem('datos'));

document.getElementById('lista').textContent = Object.values(data[1]);

for (let fila = 0; fila < data.length; fila++) {
    const cartlist = Object.values(data[fila]);

    console.log(cartlist);
    for (let columna = 0; columna < cartlist.length; columna++) {
        const element = cartlist[columna];
        console.log(element);

    }
}