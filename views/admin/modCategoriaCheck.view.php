<?php require('views/partials/connect.php');

require('views/partials/session.php');

require('views/partials/admin/headAdmin.php');

require('views/partials/admin/headerAdmin.php');

if($con){
    if (isset($_POST['nom'])){
        $nom = $_POST['nom'];
    }
    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
        $consulta = "UPDATE categoria SET nombre = '$nom' WHERE id = '$id'";
        $resultado = mysqli_query($con, $consulta);

    if ($resultado){
        header ("Location: /web-app/admin/categorias");
    }
}
?>