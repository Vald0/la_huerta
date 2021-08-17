<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root"; //xpresion_lahuerta  
$dbPassword = ""; // "!Sop4s!" 
$dbName     = "tienda_db"; // xpresion_la_huerta_db  
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>