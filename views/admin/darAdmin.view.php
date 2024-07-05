<?php
require('views/partials/connect.php'); 

require('views/partials/session.php'); 

require('views/partials/admin/headAdmin.php'); 


$id = $_GET['id'];

$consulta = "UPDATE usuario SET acceso = 'admin' WHERE id = '$id'";
$resultado = mysqli_query($con, $consulta);

header ("Location: /web-app/admin/usuarios");

?>