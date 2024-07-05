<?php require('views/partials/connect.php'); ?>

<?php require('views/partials/session.php'); ?>

<?php require('views/partials/admin/headAdmin.php'); ?>

<?php require('views/partials/admin/headerAdmin.php'); ?>

<?php
$consulta = "SELECT * FROM usuario";
$resultado = mysqli_query($con, $consulta);
?>
<section>
        <h1>Usuarios</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Acceso</th>
                <th>Estado</th>
                <th colspan="3">Modificar</th>
            </tr>
            <?php
                while($fila = mysqli_fetch_array($resultado)){
                    echo "
                        <tr>
                            <td>$fila[id]</td>
                            <td>$fila[nombre]</td>
                            <td>$fila[apellido]</td>
                            <td>$fila[direccion]</td>
                            <td>$fila[email]</td>
                            <td>$fila[contra]</td>
                            <td>$fila[acceso]</td>
                            <td>$fila[estado]</td>
                            <td>";
                    if($fila['estado'] == 'activo'){
                        echo "<a href=/web-app/admin/banear?id=$fila[id]>Banear</a>";
                    }else{
                        echo "<a href=/web-app/admin/activar?id=$fila[id]>Activar</a>";
                    }
                    echo"
                        </td>
                        <td>
                    ";
                    if($fila['acceso'] == 'usuario'){
                        echo "<a href=/web-app/admin/darAdmin?id=$fila[id]>Hacer Admin</a>";
                    }else{
                        echo "<a href=/web-app/admin/quitarAdmin?id=$fila[id]>Hacer Usuario</a>";
                    }
                    echo"
                        </td>
                        <td><a href=/web-app/admin/eliminarUsuario?id=$fila[id]>Eiminar</a></td>           
                        </tr>
                    ";   

                }
            ?>
        </table>
    </section>



<?php require('views/partials/admin/footerAdmin.php'); ?>