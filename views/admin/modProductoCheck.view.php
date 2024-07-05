<?php require('views/partials/connect.php');

require('views/partials/session.php');

require('views/partials/admin/headAdmin.php');

require('views/partials/admin/headerAdmin.php');

if($con){
    if (isset($_POST['nom']) and isset($_POST['tipo']) 
    and isset($_POST['precio']) and isset($_POST['cate'])
    and isset($_POST['id']) and isset($_FILES['pic'])){
        $nom = $_POST['nom'];
        $tipo = $_POST['tipo'];
        $precio = $_POST['precio'];
        $cate = $_POST['cate'];
        $id = $_POST['id'];
    }
    
    if (!empty($_FILES['pic']['name'])) {
        $hora = time();
        move_uploaded_file($_FILES ['pic']['tmp_name'], "img/catalogo/$hora" . ".jpeg");
        $imagen = $hora . ".jpeg";
        
        $consulta = "UPDATE producto SET nombre = '$nom', tipo = '$tipo', precio = '$precio' , imagen = '$imagen', categoria_id = '$cate' WHERE id = '$id'";
        $resultado = mysqli_query($con, $consulta);
    } else {
        $consulta = "UPDATE producto SET nombre = '$nom', tipo = '$tipo', precio = '$precio', categoria_id = '$cate' WHERE id = '$id'";
        $resultado = mysqli_query($con, $consulta);
    }

    

    if ($resultado){
        header ("Location: /web-app/admin/productos");
    }
}
?>