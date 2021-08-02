<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "cpses_xp782uluwh";
$dbPassword = "!Sop4s!";
$dbName     = "xpresion_lahuerta_db";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>