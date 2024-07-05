<?php
    $usuario = $_SESSION['email'];
?>


<body id="admin">
    <header>
            <div id="login">
                <p><?php echo "$usuario" ?></p>
                <a href="/web-app/">Ver sitio</a>
                <a href="/web-app/logout">Cerrar sesión</a>
            </div>
            <a href="/web-app/admin/"><img src="../img/logoInverso.png" alt="logo"/></a>
            <nav>
                <a href="/web-app/admin/usuarios">Usuarios</a>
                <a href="/web-app/admin/productos">Productos</a>
                <a href="/web-app/admin/categorias">Categorias</a>
            </nav>
    </header>