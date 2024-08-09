<?php 
require('views/partials/connect.php');
require('views/partials/session.php');
require('views/partials/head.php'); 

$id = $_GET['id'];

if (isset($_SESSION['carrito'][$id])) {
    unset($_SESSION['carrito'][$id]);
}


header ("Location: " .$_SERVER['HTTP_REFERER']."");

?>

