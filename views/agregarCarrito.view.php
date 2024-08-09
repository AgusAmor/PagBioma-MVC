<?php 
require('views/partials/connect.php');
require('views/partials/session.php');
require('views/partials/head.php'); 

if (isset($_POST['id_producto']) && isset($_POST['cantidad']) && isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['precio'])){
    
    $id = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $precio_final = $precio*$cantidad;


    if(isset($_SESSION['carrito'][$id])){
        $_SESSION['carrito'][$id]['cantidad'] += $cantidad;
        
    }else{
  
        $_SESSION['carrito'][$id] = [
            "id" => $id,
            "nombre" => $nombre,
            "tipo" => $tipo, 
            "cantidad" => $cantidad, 
            "precio" => $precio, 
            "precio_final" => $precio_final
        ];
    }
}

header ("Location: /web-app/catalogo")

?>

