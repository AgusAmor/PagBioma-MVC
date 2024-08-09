<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// showInfo($uri);

$routes = [
    // site
    '/web-app/' => 'controllers/index.php',
    '/web-app/catalogo' => 'controllers/catalogo.php',
    '/web-app/agregarCarrito' => 'controllers/agregarCarrito.php',
    '/web-app/vaciarCarrito' => 'controllers/vaciarCarrito.php',
    '/web-app/carrito' => 'controllers/carrito.php',
    '/web-app/eliminarDelCarrito' => 'controllers/eliminarDelCarrito.php',
    '/web-app/enviarPedido' => 'controllers/enviarPedido.php',
    '/web-app/bolson' => 'controllers/bolson.php',
    '/web-app/bolsonEnvios' => 'controllers/bolsonEnvios.php',
    '/web-app/bolsonEnviado' => 'controllers/bolsonEnviado.php',
    '/web-app/nosotros' => 'controllers/nosotros.php',
    // session
    '/web-app/login' => 'controllers/session/logIn.php',
    '/web-app/loginCheck' => 'controllers/session/logInCheck.php',
    '/web-app/signup' => 'controllers/session/signUp.php',
    '/web-app/signupCheck' => 'controllers/session/signUpCheck.php',
    '/web-app/logout' => 'controllers/session/logOut.php',
    // admin
    '/web-app/admin/' => 'controllers/admin/index.php',
    '/web-app/admin/usuarios' => 'controllers/admin/usuarios.php',
    '/web-app/admin/productos' => 'controllers/admin/productos.php',
    '/web-app/admin/categorias' => 'controllers/admin/categorias.php',
    '/web-app/admin/banear' => 'controllers/admin/banear.php',
    '/web-app/admin/activar' => 'controllers/admin/activar.php',
    '/web-app/admin/darAdmin' => 'controllers/admin/darAdmin.php',
    '/web-app/admin/quitarAdmin' => 'controllers/admin/quitarAdmin.php',
    '/web-app/admin/eliminarUsuario' => 'controllers/admin/eliminarUsuario.php',
    '/web-app/admin/modProducto' => 'controllers/admin/modProducto.php',
    '/web-app/admin/modProductoCheck' => 'controllers/admin/modProductoCheck.php',
    '/web-app/admin/agregarProducto' => 'controllers/admin/agregarProducto.php',
    '/web-app/admin/eliminarProducto' => 'controllers/admin/eliminarProducto.php',
    '/web-app/admin/modCategoria' => 'controllers/admin/modCategoria.php',
    '/web-app/admin/modCategoriaCheck' => 'controllers/admin/modCategoriaCheck.php',
    '/web-app/admin/eliminarCategoria' => 'controllers/admin/eliminarCategoria.php',
    '/web-app/admin/agregarCategoria' => 'controllers/admin/agregarCategoria.php'

    
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort();
    }
}

routeToController($uri, $routes);

