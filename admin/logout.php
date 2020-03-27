<?php 
session_start();
unset($_SESSION["admin_logged"]);
header("Location:login.php");
?>