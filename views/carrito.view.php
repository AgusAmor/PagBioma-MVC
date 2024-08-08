<?php require('views/partials/connect.php'); ?>

<?php require('views/partials/session.php'); ?>

<?php require('views/partials/head.php'); ?>

<?php require('views/partials/header.php'); ?>

<main>
    <section id="carrito">
        <h1>Carrito Orgánico</h1>
        <?php
        $consulta = "SELECT * FROM producto";
        $resultado = mysqli_query($con, $consulta);
        $totalFinal = 0;
	
		if(isset($_SESSION['carrito'])){
            echo "
            <table>
                    <tr>
                        <th>Producto</th>
                        <th>Tipo</th>
                        <th>Cantidad</th>
                        <th>Precio unitario</th>
                        <th>Precio final</th>
                    </tr>";
		    foreach ($_SESSION['carrito'] as $id => $fila) {
			echo "
                    <tr>
                        <td>
                            $fila[nombre]
                        </td>
                        <td>
                            $fila[tipo]
                        </td>
                        <td>
                            <input type=number min=0 step=0.1 value=$fila[cantidad]>
                        </td>
                        <td>
                            $$fila[precio]
                        </td>
                        <td>
                            $$fila[precio_final]
                        </td>
                        <td>
                            <a href=# >Eliminar</a>
                        </td>
                    </tr>
			";
            $totalFinal += $fila['precio_final'];
			}	
            echo "
            <tr>
            <th>Total a pagar: </th>
            <td>$$totalFinal</td>
            </tr>
            </table>
            <div class=botoneraModal>
            <a href=# >Actualizar</a>
            <a href=/web-app/vaciarCarrito >Vaciar carrito</a>
            <a href=# >Finalizar compra</a>
            </div>
            </div>";
        }else{
            echo "<p>Aún no se agregó nada al carrito. Visitá nuestro <a href=/web-app/catalogo >catálogo</a> para ver nuestros productos.</p>";
        }
            ?>

    </section>
</main>