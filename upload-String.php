<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';
$uploads_dir = 'img/'; //directorio para subir el archivo
$file_name = basename($_FILES["imagen"]["name"]);
$upload_file = $uploads_dir.$file_name;
// File upload path
$nombre_c = mysqli_real_escape_string($db, $_REQUEST['nombre_c']);
$correo = mysqli_real_escape_string($db, $_REQUEST['correo']);
$apellidos = mysqli_real_escape_string($db,$_REQUEST['apellidos']);
$direccion = mysqli_real_escape_string($db, $_REQUEST['direccion']);
$telefono = mysqli_real_escape_string($db, $_REQUEST['telefono']);
$contraseña = mysqli_real_escape_string($db, $_REQUEST['contraseña']);
$targetFilePath = $uploads_dir . $file_name;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);




     $archivo =  $_FILES['imagen']['tmp_name'];
     move_uploaded_file($archivo, $upload_file);

    //Inserta los valores a la base de datos
    if(isset($_POST["submit"])){
        $allowTypes = array('jpg','png','jpeg','gif','svg','webp'); //palabra reservada: array
        if(in_array($fileType, $allowTypes)){  //palabra reservada: in_array

       $insert = $db->query("INSERT INTO contactos(nombre_c, correo, apellidos, direccion, telefono, contraseña, file_name) VALUES ('$nombre_c',  '$correo', '$apellidos', '$direccion', '$telefono','$contraseña','$file_name') ");
       
        if ($insert) {
            echo "Registro ingresado correctamente";
         } else {
            echo "Error: " . $insert . "" . mysqli_error($db);
         } 
        }else{
            echo"lo sentimos, solo aceptamos archivos con formato jpg, png, jpeg, gif, svg y webp";
        }
   
    };
?>