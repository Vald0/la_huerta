<?php  
session_start();
include 'dbconfig.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];



// echo $correo."<br>";
// echo $contrasena."<br>";


 $query_c = mysqli_query($db,"SELECT * FROM contactos WHERE correo = '".$correo."' AND contrasena = '".$contrasena."' ");
 $nr = mysqli_num_rows($query_c);

 $fila = mysqli_fetch_row($query_c);
if  (empty($fila)){
    echo 'suqmadiq';

    header("Location:login.php?err_login=1");

    } else{
        $name =  $fila[0]; // Nombre
        $mail = $fila[1]; // Correo
        $lastN = $fila[2]; // Apellidos
        $address = $fila[3];// Direccion
        $tel = $fila[4]; // Telefono
        $pass = $fila[5]; // Contraseña
        $image = $fila[6]; // file_name
        $userArray = array(
            'nombre' => $name,
            'apellidos' => $lastN, 
            'correo' => $mail,
            'direccion' => $address,
            'telefono' => $tel,
            'file_name' => $image
        );


        //  echo $userArray['nombre'].'<br>';
        //  echo $userArray['apellidos'].'<br>';
        //  echo $userArray['correo'].'<br>';
        //  echo $userArray['direccion'].'<br>';
        //  echo $userArray['telefono'].'<br>';
        //  echo $userArray['file_name'].'<br>';
        /*
        NUMERO DE REPORTE Telmex
        2671 4088 */



        $_SESSION['usuario'] = $userArray; 
        echo $_SESSION['usuario']['file_name'];
        header("Location:index.php"); /* Redirección del navegador */  
        
    }


?>

