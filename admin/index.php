<?php
require_once './database/connection.php';
session_start();
//session_destroy();
//exit();

if (isset($_SESSION['session_id'])){
    $session_id = $_SESSION['session_id'];

    $session_sql = "SELECT * FROM admins WHERE session_id = '$session_id'";
    $session_check = $db->query($session_sql);

    if ($session_check->num_rows > 0) {
        header("Location: ./public/index.php");
        $_SESSION['access'] = 1;
    }else{
        header("Location: ./public/signin.php");
    }
}

$url = "./public/index.php";
header("Location: ".$url);