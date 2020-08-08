<?php
session_start();

if(!isset($_SESSION['email'])){
    $_SESSION['msg'] = "Anda harus masuk untuk menggunakan fitur ini";
    header("location : login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    header("location : login.php");
}

include ('umkm_go.html');
?>