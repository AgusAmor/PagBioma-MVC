<?php require('views/partials/connect.php');
require('views/partials/session.php');
require('views/partials/head.php');
require('views/partials/header.php');

echo "
    <div class=cardGracias>
        <h2>¡Gracias por tu pedido!</h2>
        <p>En caso de tener alguna consulta acerca de tu pedido no dudes en escribirnos.</p>
    </div>";

    if(isset($_SESSION['carrito'])){
        unset($_SESSION['carrito']);
    }
?>