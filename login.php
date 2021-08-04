<!DOCTYPE html>
<html class="contactos" lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
  <title>La Huerta</title>
</head>  
    <body>
        <header>
        <div class="logo-place ">
        <img src="assets/logo.png" alt="logotipo">
    </div>
        </header>
        <div class="form_login">
        <form action="search_login.php"  method="post" enctype="multipart/form-data" onsubmit="return validar();">
            <table> <h3>Iniciar Sesion</h3>
                <tr><td align="center"><label for="correo">Correo</label></td></tr>
                <tr><td><input class="input_form" type="email" name="correo" id="correo" placeholder="Correo"></td></tr>
                <tr><td><div class="error" id="err_mail"></div></td></tr>

                <tr><td align="center"><label for="pass">Contraseña</label></td></tr>
                <tr><td><input class="input_form" id="pass" type="password" name="contrasena" placeholder= "Contraseña"></td></tr>
                <tr><td><div class="error" id="err_pass"></div></td></tr>

                <tr><td><input class="form-submit" onclick ="validar()" type="submit" name="submit" value="Ingresar"></td></tr>
                
            </table>
          <div class="registrate">¿Eres nuevo?, Registrate<a href="admin.php"> Aquí.</a></div>
        </form>
       
        </div>
    </body>
</html>