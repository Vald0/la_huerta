<?php  

include 'dbconfig.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query_c = mysqli_query($db,"SELECT * FROM contactos WHERE correo = '".$correo."' AND contrasena = '".$contrasena."' ");
$nr = mysqli_num_rows($query_c);

$fila = mysqli_fetch_row($query_c);

echo $correo."<br>";
echo $contrasena."<br>";

echo $fila[0];


// global $userArray;
if ($nr == 1) {
    header("Location : index.php");
    echo "Bienvenidos:".$fila[0];  
   
   }
   
   else if ($nr == 0){
       echo "No ingreso";
   }
   


$name =  $fila[0]; // Nombre
$lastN = $fila[1]; // Apellidos
$mail = $fila[2];// Correo
$dir = $fila[3]; // Direccion
$tel = $fila[4]; // Telefono
$pass = $fila[5]; // Contraseña
$image = $fila[6]; // Nombre de la Imagen

$userArray = array(
    'nombre_c' => $name,
    'apellidos' => $lastN, 
    'correo' => $mail,
    'direccion' => $dir,
    'telefono' => $tel,
    'file_name' => $image
);



?>

<?php 
session_start();
$_SESSION['userArray'] = array();  
?>


