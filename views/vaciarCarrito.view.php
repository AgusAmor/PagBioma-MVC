<?php 
require('views/partials/connect.php');
require('views/partials/session.php');
require('views/partials/head.php'); 

if(isset($_SESSION['carrito'])){
    unset($_SESSION['carrito']);
}

header ("Location: " .$_SERVER['HTTP_REFERER']."");

?>