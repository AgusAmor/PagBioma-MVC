<?php require('views/partials/connect.php'); ?>

<?php require('views/partials/session.php'); ?>

<?php require('views/partials/admin/headAdmin.php'); ?>

<?php require('views/partials/admin/headerAdmin.php'); ?>

<?php
$consulta = "SELECT * FROM producto";
$resultado = mysqli_query($con, $consulta);
?>
    <section>
        <h1>Productos</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Foto</th>
                <th>Categoria</th>
                <th colspan="2">Modificar</th>
            </tr>
            <?php
                while($fila = mysqli_fetch_array($resultado)){
                    echo "
                        <tr>
                            <td>$fila[id]</td>
                            <td>$fila[nombre]</td>
                            <td>$fila[tipo]</td>
                            <td>$ $fila[precio]</td>
                            <td><img src=../img/catalogo/$fila[imagen] /></td>
                            <td>$fila[categoria_id]</td>
                            <td><a href=/web-app/admin/modProducto?id=$fila[id]>Editar</a></td>
                            <td><a href=/web-app/admin/eliminarProducto?id=$fila[id]>Eliminar</a></td>
                        </tr>
                    ";

                }
            ?>
        </table>
        <form action="/web-app/admin/agregarProducto" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Agregar producto</legend>
                <div>
                    <label for="nom">Nombre <strong>*</strong></label>
                    <input type="text" name="nom" id="nom" required/>
                </div>
                <div>
                    <label for="tipo">Tipo <strong>*</strong></label>
                    <div>
                        <label>
                            <input type="radio" name="tipo" id="tipo" value="organico" required/> Orgánico
                        </label>
                        <label>
                            <input type="radio" name="tipo" id="tipo" value="agroecologico" required/> Agroecológico
                        </label>
                    </div>
                </div>
                <div>
                    <label for="precio">Precio <strong>*</strong></label>
                    <input type="number" name="precio" id="precio" required/>
                </div>
                <div>
                    <label for="pic">Foto <strong>*</strong></label>
                    <input type="file" name="pic" id="pic" required/>
                </div>
                <div id="select">
                    <label for="cate">Categoría <strong>*</strong></label>
                    <select name="cate" id="cate">
                        <?php
                            $consulta = "SELECT * FROM categoria";
                            $resultado = mysqli_query($con, $consulta);
                            while ($fila = mysqli_fetch_array($resultado)){
                                echo "<option value=$fila[id] >$fila[nombre]</option>";
                            }
                        ?>
                    </select>
                </div>
                <input class="enviarBtn" type="submit" value="Agregar producto"/>
            </fieldset>
        </form>
    </section>



<?php require('views/partials/admin/footerAdmin.php'); ?>