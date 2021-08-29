<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Huerta</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
</head>
<body>
<?php

session_start();


include 'header.php';

?>
<h2 class = "title-section">Frutas y Vegetales</h2>
<section class="container"> 


<?php
// Include the database configuration file
include 'dbconfig.php';

// Obtener informacio de la base de datos
$query = $db->query("SELECT * FROM t_product ORDER BY conjunto DESC");


if($query->num_rows > 0){
    echo '<div class="products-lists">';
   
    
    while($row = $query->fetch_assoc()){

        $nombre_p = $row["Nombre"];
        $url_p = $row["file_name"];
        $Precio = $row["Precio"];
        $status = $row["status"];
        $unidad = $row["unidad"];
        $id = $row["id"];
        $cadena = str_replace(' ','',$nombre_p);

?>
    <?php if($status == 1){ ?>

    <div class="product-box">
    <div class="product">
    <a href="single_product_page.php?producto=<?php echo $id ;?>"  rel="noopener noreferrer">
        <p class="detail-title call-<?php echo $cadena ?>" id="nombre_p" ><?php echo $nombre_p; ?></p>
        <div class="image-box" >
            <img class= "call-<?php echo $cadena ?>" src="<?php echo $url_p; ?>" alt="imagen de <?php echo $cadena?>" />
        </div>   
    </a>
        <div class="details">
            <p class="detail-price" id="details"> <span>$</span>  <?php echo $Precio; ?> / <?php echo $unidad; ?>  </p>
            
            <div class= "cart-select btn-carrito">
                <a href="#quit<?php echo $cadena?>" onclick = "carrito_del(product_name = '<?php echo $nombre_p?>', product_price = '<?php echo $Precio?>', product_unit = '<?php echo $unidad?>');"><i class="fas fa-minus"></i></a>
                <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                <a href="#<?php echo $cadena?>" onclick = "carrito_send(product_name = '<?php echo $nombre_p?>', product_price = '<?php echo $Precio?>', product_unit = '<?php echo $unidad?>');"><i class="fas fa-plus"></i></a>
                
            </div>
        </div>
    </div>
    </div>
  
<?php 

} ?>

<?php 

}


echo '</div>';
} 

else{ ?>
 <p>No image(s) found...</p>
<?php } ?>


</section>
<section>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.4203966684604!2d-100.57697938491636!3d28.677068482400223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865f8bc09eb0fc05%3A0x36157e6b2b4c9c65!2sLa%20Huerta!5e0!3m2!1ses-419!2smx!4v1624907671589!5m2!1ses-419!2smx" class="mapa" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
</section>
    <?php include 'footer.php' ?>
</body>


<script>
const carrito_p = []; 

<?php 
//inlur el archivo de configuracion de la conexion de la base de datos
include 'dbConfig.php';
// Obtener informacio de la base de datos
$query = $db->query("SELECT * FROM t_product ORDER BY conjunto DESC");
     if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){

        $nombre_p = $row["Nombre"];
        $url_p = $row["file_name"];

        $cadena = str_replace(' ','',$nombre_p); //los espacios del string son removidos
?>


    

    carrito_p.push('<?php echo $nombre_p ?>');

<?php 
}?>
<?php
}  ?>
// console.log(carrito_p);





var product_car = []

//Esta funcion especifica añadir el producto seleccionado por el cliente
function carrito_send(product_name, product_price, product_unit){
    let objectProduct = {
        nombre: product_name,
        precio: product_price,
        unidad: product_unit 
    };
    product_car.push(objectProduct);
    console.log(product_car);
    carrito_count();
};

//esta funcion especifica eliminar el producto seleccionado por el cliente
function carrito_del(product_name, product_price, product_unit){
    let objectProduct = {
        nombre: product_name,
        precio: product_price,
        unidad: product_unit 
    };
   
   index = product_car.findIndex(x => x.nombre === product_name);
   console.log(index);
   console.log(objectProduct);
   
     if(index > -1){
     product_car.splice(index, 1);

    console.log(product_car);
    carrito_count();
  }
}
 

function carrito_count(){
    let conteo_carro = document.getElementById("conteo_carro");
    
    conteo_carro.innerHTML = product_car.length;
    
    if (product_car.length == 0){
        conteo_carro.innerHTML = "";
    }
    
};

///PROTOTYPE JAVASCRIPT?
   </script>
</html>