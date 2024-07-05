<?php require('views/partials/connect.php');

require('views/partials/session.php');

require('views/partials/admin/headAdmin.php');

require('views/partials/admin/headerAdmin.php');

$id = $_GET['id'];

$consulta = "DELETE FROM producto WHERE id ='$id'";
$resultado = mysqli_query($con, $consulta);

header ("Location: /web-app/admin/productos");

?>