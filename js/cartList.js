/**Creando lista para JS**/
data = JSON.parse(localStorage.getItem('datos'));
var total = 0;
var subtotal = document.getElementById('total');

lista();

function lista() {

    for (let fila = 0; fila < data.length; fila++) {
        const cartlist = Object.values(data[fila]);
        var div = document.createElement("div");

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
        var btn = document.createElement("span");
        btn.setAttribute("id", `delete-btn`);
        console.log(`Carrito ${cartlist[0]} ${cartlist[1]} ${cartlist[2]} `);
        btn.innerHTML = `<a onclick = "carrito_del(product_name ='${cartlist[0]}', product_price ='${cartlist[1]}', product_unit ='${cartlist[2]}', numList ='${fila}');"><i class="fas fa-trash-alt"></i></a>`
        document.getElementById(`listing-${fila}`).appendChild(btn);
    }

    subtotales();

}

function subtotales() {
    subtotal.innerHTML = `Total : $ ${total}`;


}
console.log(data);
my_json = JSON.stringify(data);
var btn_send = document.createElement("a");
btn_send.setAttribute("id", `buy_button`);

btn_send.href = `reciboPdf.php?objectTicket=${my_json}`;
btn_send.textContent = "Imprimir recibo";
document.getElementById("send").appendChild(btn_send);