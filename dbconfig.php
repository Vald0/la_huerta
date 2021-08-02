<?php
// Database configuration
$dbHost     = "sql103.buenhost.ml";
$dbUsername = "buen_27940699";
$dbPassword = "Dominator66";
$dbName     = "buen_27940699_la_huerta_db";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>