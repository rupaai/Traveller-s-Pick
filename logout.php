<?php
include('config.php');
include ('login.php');
global  $connect;
$_SESSION['loggedin'] = false;
$_SESSION['username'] = "";
$_SESSION['id'] = null;
session_destroy();
header("location:signup.php");
?>
