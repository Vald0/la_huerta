<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root"; //root xpresion_lahuerta  
$dbPassword = ""; // "!Sop4s!" 
$dbName     = "tienda_db"; //tienda_db  xpresion_la_huerta_db
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$db->query("SET NAMES utf8"); //Agrega los acentos y la ñ
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>