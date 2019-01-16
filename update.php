<?php
include('config.php');
include ('login.php');
global  $connect;
$_SESSION['update'] = true;
    header("location:signup.php");
?>
