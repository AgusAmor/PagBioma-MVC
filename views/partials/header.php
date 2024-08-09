<header>
    <div>
        <div id="login">
            <?php
                    if(isset($_SESSION['email'])){
                        $usuario = $_SESSION['email'];
                        echo "<p>$usuario</p>";
                        if($_SESSION['acceso'] == 'admin'){
                            echo "<a href=/web-app/admin/>Ir ABM</a>";
                        }
                        echo "<a href=/web-app/logout>Cerrar sesión</a>";
                        
                    }else{
                        echo"
                        <a href=/web-app/login>Iniciar sesión</a>
                        <a href=/web-app/signup>Registrarse</a>
                        ";
                    }   
                    ?>
        </div>
        <div id="logo">
            <a href="/web-app/"><img src="img/logo.png" alt="logo"/></a>
            <nav>
            <a href="/web-app/">Inicio</a>
            <a href="/web-app/catalogo">Catálogo</a>
            <a href="/web-app/bolson">Bolsón Orgánico</a>
            <a href="/web-app/nosotros">Nosotros</a>
        </nav>
        </div>
        <?php 
            if(isset($_SESSION['carrito'])){
                $carrito = count($_SESSION['carrito']);
            }else{
                $carrito = "";
            }

            echo "<button id=btn_abirModal >$carrito<i class='bi bi-cart-fill'></i></button>";
        ?>
    </div>
    <div id="modal-container">
        <div id="modalCarrito">
            <?php
                        
                        if(isset($_SESSION['carrito'])){
                            $consulta = "SELECT * FROM producto";
                            $resultado = mysqli_query($con, $consulta);
                            $totalFinal = 0;
                            echo "
                            
                            <h2>Carrito</h2>
                            <hr>
                            <button id=btn_cerrarModal ><i class='bi bi-x'></i></button>
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
                                            $fila[cantidad]
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
                            echo "
                                </table>
                                <div>                               
                                    <p>Total a pagar: </p>
                                    <p><strong>$$totalFinal</strong></p>
                                </div>
                                <div class=botoneraCarrito>
                                    <a href=/web-app/vaciarCarrito >Vaciar carrito</a>
                                    <a href=/web-app/carrito >Realizar pedido</a>
                                </div>
                            </div>
                        ";
                        }else{
                            echo "<button id=btn_cerrarModal ><i class='bi bi-x'></i></button>
                            <p>Aún no se agregó nada al carrito. Visitá nuestro 
                            <a href=/web-app/catalogo >catálogo</a>
                            para ver nuestros productos.</p>
                            </div>";
                        }
                        
                ?>
                </div>
    </header>