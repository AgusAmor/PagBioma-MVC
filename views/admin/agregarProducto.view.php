<?php require('views/partials/connect.php');
require('views/partials/session.php');

require('views/partials/admin/headAdmin.php');

require('views/partials/admin/headerAdmin.php'); 

if($con){
    if (isset($con)){
        $nom = $_POST['nom'];
        $tipo = $_POST['tipo'];
        $precio = $_POST['precio'];
        $cate = $_POST['cate'];
        
        $hora = $hora = time();
        move_uploaded_file($_FILES ['pic']['tmp_name'], "img/catalogo/$hora" . ".jpeg");
        $imagen = $hora . ".jpeg";
    }

    $consulta = "INSERT INTO producto (nombre, tipo, precio, imagen, categoria_id) 
    VALUE ('$nom', '$tipo', '$precio', '$imagen', '$cate')";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado){
        header ("Location: /web-app/admin/productos");
    }
}

?>