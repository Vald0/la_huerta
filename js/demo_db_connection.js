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

conexion.query('SELECT * FROM contactos ', function(error, results, fields) {
    if (error)
        throw error;

    results.foreach(result => {
        console.log(result);
    });
});

conexion.end();