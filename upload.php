<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "img/"; //string de la ubicacion de la carpeta
$fileName = basename($_FILES["file"]["name"]); //palabra reservada: basename (se usa para reservar el nombre del archivo en formato string)
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$nombre_p = mysqli_real_escape_string($db, $_REQUEST['Nombre']);



if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf'); //palabra reservada: array
    if(in_array($fileType, $allowTypes)){  //palabra reservada: in_array
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, Nombre, uploaded_on) VALUES ('".$fileName."','$nombre_p', NOW())"); //NOW() es para la fecha de subida
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>

