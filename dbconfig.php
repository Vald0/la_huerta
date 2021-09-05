<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "xpresion_lahuerta"; //root xpresion_lahuerta  
$dbPassword = "!Sop4s!"; // "!Sop4s!" 
$dbName     = "xpresion_la_huerta_db"; //  xpresion_la_huerta_db
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>