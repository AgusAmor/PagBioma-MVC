<?php require('views/partials/connect.php');
require('views/partials/session.php');

require('views/partials/admin/headAdmin.php');

require('views/partials/admin/headerAdmin.php'); 
if($con){
    if (isset($con)){
        $nom = $_POST['nom'];
    }

    $consulta = "INSERT INTO categoria (nombre) VALUE ('$nom')";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado){
        header ("Location: /web-app/admin/categorias");
    }
}
?>