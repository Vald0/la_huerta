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
include 'header.php';?>

<div class= "carrito-list">
    <div>Carrito mamalon</div>
</div>

    <?php include 'footer.php' ?>
</body>
<script>
var data = JSON.parse(localStorage.getItem('datos'));
var datalength = data.length;
console.log(data);
console.log(datalength);
</script>


</html>