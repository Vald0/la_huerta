/**Creando lista para JS**/
data = JSON.parse(localStorage.getItem('datos'));
var total = 0;
var subtotal = document.getElementById('total');
// document.getElementById('lista').textContent = Object.values(data[1]);

for (let fila = 0; fila < data.length; fila++) {
    const cartlist = Object.values(data[fila]);
    var div = document.createElement("div");
    // div.innerHTML = "<span>•</span>";
    document.getElementById("carrito-list").appendChild(div);
    div.classList.add("listed-prod");
    div.setAttribute("id", `listing-${fila}`);

    console.log(cartlist);
    for (let columna = 0; columna < cartlist.length; columna++) {
        var descripcion = cartlist[columna];
        console.log(descripcion);
        var line = document.createElement("p");

        document.getElementById(`listing-${fila}`).appendChild(line);
        if (!isNaN(cartlist[columna])) {

            descripcion = `..........$${cartlist[columna]}/`;
            total += parseFloat(cartlist[columna]);
            line.innerHTML = descripcion;

        } else {
            line.innerHTML = descripcion;

        }

    }
}
subtotal.innerHTML = `Total : $ ${total}`;