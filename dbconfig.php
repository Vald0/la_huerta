<?php
// Database configuration
$dbHost     = "189.179.131.216:3306";
$dbUsername = "xpresion_lahuerta";
$dbPassword = "!Sop4s!";
$dbName     = "xpresion_lahuerta_db";
//OMG
// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>