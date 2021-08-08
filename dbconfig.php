<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "xpresion_lahuerta"; //root 
$dbPassword = "!Sop4s!"; // "" 
$dbName     = "xpresion_la_huerta_db"; //tienda_db   
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>