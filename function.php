<?php

function showInfo($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function logInCheck(){
    require 'views/partials/connect.php';

    if (isset($_POST['user'])){
        $email = $_POST['user'];
    }
    if (isset($_POST['pass'])){
        $contra = $_POST['pass'];
    }
    
    $consulta = "SELECT * FROM usuario WHERE email = '$email' AND contra = MD5('$contra')";
    
    $resultado = mysqli_query($con, $consulta);
    $fila = mysqli_fetch_assoc($resultado);
    
    if ($fila['acceso'] == 'admin'){
        if ($fila['estado'] == 'banneado'){
            header("Location: /web-app/login?ban=ban");
        }else{
            $_SESSION = $fila;
            header("Location: /web-app/admin/");
        }
    }else{
        if ($fila['estado'] == 'banneado'){
            header("Location: /web-app/login?ban=ban");
        }else{
            $_SESSION = $fila;
            header("Location: /web-app/");
        }
    }
    
    if($fila == NULL){
        header("Location: /web-app/login?error=error");
    }
}

function signUpCheck(){
    require 'views/partials/connect.php';

    if ($con){
        $nom = $_POST['nom'];
        $apell = $_POST['apell'];
        $email = $_POST['user'];
        $contra = $_POST['pass'];
    
        $consulta = "INSERT INTO usuario SET nombre = '$nom', apellido = '$apell', 
        email = '$email', contra = MD5('$contra'), acceso = 'usuario', estado = 'activo'";
        
        mysqli_query($con, $consulta);
        header ("Location: /web-app/login?alta=ok");
    }

}
