<?php 
session_start();

session_destroy();
header("Location:login.php?err_login=0");
?>