<?php
require('views/partials/connect.php'); 

require('views/partials/session.php'); 

require('views/partials/admin/headAdmin.php'); 


$id = $_GET['id'];

$consulta = "DELETE FROM usuario WHERE id ='$id'";
$resultado = mysqli_query($con, $consulta);

header ("Location: /web-app/admin/usuarios");

?>