var mysql = require('mysql');


var conexion = mysql.createConnection({
    host: 'localhost',
    database: 'tienda_db',
    user: 'root',
    password: ''
});

conexion.connect(function(error) {
    if (error) {
        throw error;
    } else {
        console.log('CONEXION EXITOSA PAPU')
    }
});

conexion.query('SELECT * FROM contactos ', function(error, results) {


    if (error)
        throw error;

    results.forEach(result => {

        console.log(result);

        if (result.correo === mail && password === result.contrasena) {
            alert("Encontrado")

        } else {
            console.log("nope");
        }


    });
});


conexion.end();