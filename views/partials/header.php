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
                <a href="/web-app/"><img src="img/logo.png" alt="logo"/></a>
            </div>
        <nav>
            <a href="/web-app/">Inicio</a>
            <a href="/web-app/catalogo">Catálogo</a>
            <a href="/web-app/bolson">Bolsón Orgánico</a>
            <a href="/web-app/nosotros">Nosotros</a>
        </nav>
    </header>