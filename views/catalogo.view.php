<?php require('views/partials/connect.php'); ?>

<?php require('views/partials/session.php'); ?>

<?php require('views/partials/head.php'); ?>

<?php require('views/partials/header.php'); ?>

<main>
<section>
        <h1>Catálogo</h1>
        <div class="modal" id="modal_cart">
        </div>
            <div class="catalogo">
                <?php
                    $consulta = "SELECT * FROM producto";
                    $resultado = mysqli_query($con, $consulta);
                    $totalFinal = 0;
					echo "
                    <div id=modalCarrito>
                    <h3>Carrito</h3>
                    <button id=btnCerrarModal ><i class='bi bi-x'></i></button>
                        <table>
                            <tr>
                                <th>Producto</th>
                                <th>Tipo</th>
                                <th>Cantidad</th>
                                <th>Precio unitario</th>
                                <th>Precio final</th>
                            </tr>

                    ";
					if(isset($_SESSION['carrito'])){
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
                                        <a href=/web-app/eliminarDelCarrito?id=$id >Eliminar</a>
                                    </td>
                                </tr>
							";
                            $totalFinal += $fila['precio_final'];
						}	
					}
                    echo "
                            </table>
                            <div>                               
                                <p>Total a pagar: </p>
                                <p>$$totalFinal</p>
                            </div>
                            <div class=botoneraCarrito>
                                <a href=# >Actualizar</a>
                                <a href=/web-app/vaciarCarrito >Vaciar carrito</a>
                                <a href=/web-app/carrito >Finalizar compra</a>
                            </div>
                        </div>
                    ";



                    $contador = 0;
                    echo "<div class=second>";
                    while($fila = mysqli_fetch_array($resultado)){
                        echo "
                        <div>
                            <img src=img/catalogo/$fila[imagen] alt=$fila[nombre]/>
                            <h2>$fila[nombre]</h2>
                            <h3>$fila[tipo]</h3>
							<p>$$fila[precio](kg)</p>
                            <form action=/web-app/agregarCarrito method=post id=formAgregarCarrito>
                                <input type=hidden name=id_producto value=$fila[id] />
								<input type=hidden name=nombre value=$fila[nombre] />
								<input type=hidden name=tipo value=$fila[tipo] />
								<input type=hidden name=precio value=$fila[precio] />
                                <div>
                                    <input type=number id=cantidad name=cantidad min=0 step=0.1 value=0.5 />
                                    <label for=cantidad>kg</label>
                                </div>
                                <input class=btnAgregarCarrito type=submit value='Agregar al carrito' />
                            </form>
                        </div>";
                        $contador++;
                        if ($contador == 5){
                            echo "</div>";
                            echo "<div class='second'>";
                            $contador = 0;
                        }
                    }
                    
                ?>
            </div>
    </section>
</main>

<?php require('views/partials/footer.php'); ?>
