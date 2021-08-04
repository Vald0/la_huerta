<!DOCTYPE html>
<html class="contactos" lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
  <title>La Huerta</title>
</head>
<body>
<header class="form-header">
<div class="logo-place">
            <img src="" alt="logotipo">
        </div>
        
        <div class="options-place">
            <div class="item-option" title="Registrate">
            <a href="admin.php"> <i class="fas fa-user" aria-hidden="true"></i></a>
            </div>
            <div class="item-option" title="Ingresar">
           <a href="login.php"> <i class="fas fa-sign-in-alt" aria-hidden="true"></i></a>
            </div>
            <div class="item-option" title="Mis compras">
                <i class="fas fa-shopping-cart" aria-hidden="true"></i>
            </div>
        </div>
</header>

<!--↑ header editado  ↑-->


<!-- -->

<div class="form-background">

<form action="upload-String.php"  method="post" enctype="multipart/form-data" onsubmit="return validar();">
<h1 class="form-title">Registrate</h1>     
<div class="flex-row">
    <span class = "field_form">
        <label for="nombre">Nombre:</label>
        <input class="input_form" type="text" name="nombre_c" id="nombre" placeholder="Nombre">

    </span>
    <div class="error error_name" id="err_name"></div>
    
    <span class= "field_form">
        <label for="apellidos">Apellidos:</label>
        <input class="input_form" type="text" name="apellidos" id="apellidos" placeholder="Apellido Paterno, Apellido Materno">
    </span>
    <div class="error" id="err_lastname"></div>
    <span class= "field_form">
        <label>Imagen:</label>
        <input class="input_form" type="file" name="imagen" required>
    </span>
    <span class="field_form">
        <label for="direccion">Direccion:</label>
        <input class="input_form" type="text" name="direccion" id="direccion" placeholder="Direccion">
    </span>
    <div class="error" id="err_address"></div>

<span class="field_form">
    <label for="telefono">Telefono:</label>
    <input class="input_form" type="text" name="telefono" id="telefono" placeholder="Telefono">
</span>    
    <div class="error" id="err_phone"></div>
<span class="field_form">
    <label for="correo">Correo:</label>
    <input class="input_form" type="email" name="correo" id="correo" placeholder="Correo">
</span>
    <div class="error" id="err_mail"></div>
<span class="field_form">
    <label for="pass">Contraseña:</label>
    <input class="input_form" id="pass" type="password" name="contrasena" placeholder= "Contraseña">
    </span>
<span class="field_form">
    <label for="pass_2">Confirmar Contraseña:</label>
    <input class="input_form" id="pass_2" type="password" name="contrasena" placeholder= "Confirmar Contraseña">
</span>
    <div class="error" id="err_pass"></div>
    <input class="form-submit" onclick ="validar()" type="submit" name="submit" value="Registrar">
</div>



</form>

</div>
<!-- <a href="index.php">ver imagenes guardadas </a>
<a href="pruebas.php">ver pruebas</a>
<a href="basicoPDF.php">basicoPDF</a> -->
</body>
<script src=js/app.js></script>

</html>