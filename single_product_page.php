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
<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet"></head>
<body> 
<?php 
include 'header.php';
include 'dbconfig.php';

$title = 'Name of Product';

$id_call = $_GET['producto'];

echo $id_call;

?>
<section class="singular-container"> 


<?php
// Include the database configuration file
include 'dbconfig.php';

// Obtener informacion de la base de datos
$query = $db->query("SELECT * FROM t_product WHERE id = '$id_call'");


if($query->num_rows > 0){
   
    
    
    if($row = $query->fetch_assoc()){

        $nombre_p = $row["Nombre"];
        $url_p = $row["file_name"];
        $Precio = $row["Precio"];
        $status = $row["status"];
        $unidad = $row["unidad"];
        $id = $row["id"];

?>
 
    <?php if($status == 1){ ?>
      <div class="single-container">
        <div class="left-info">
          <h1 class="title-product"><?php echo $nombre_p ?></h1>
          <img src="<?php echo $url_p ?>" alt="iamgen de <?php echo $nombre_p?>">
        </div>

        <div class="rigth-info">
         <h3> <?php echo '$ '.$Precio.'/'. $unidad ?> </h3>
         <div class="boton-carrito">
         <a href="">Agregar al carrito<i class="fas fa-shopping-cart" aria-hidden="true"></i></a>
        </div>
      </div>
  
<?php 

} ?>

<?php 

}


} 

else{ ?>
 <p>No file(s) found...</p>
<?php } ?>







</section>

<?php include 'footer.php'; ?> 
</body>
</html>
