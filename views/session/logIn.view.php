<?php require('views/partials/connect.php'); ?>

<?php require('views/partials/session.php'); ?>

<?php require('views/partials/head.php'); ?>

<?php require('views/partials/header.php'); ?>

<main>
<form action="/web-app/loginCheck" method="post">
        <fieldset>
            <legend>Inicio de sesión</legend>
            <div>
                <label for="user">Usuario</label>
                <input id="user" name="user" type="text" placeholder="biomaurquiza@gmial.com"/>
            </div>
            <div>
                <label for="pass">Contraseña</label>
                <input id="pass" name="pass" type="password"/>
                <?php
                    if(isset($_GET['error'])){
                        echo "
                        <div id=problema>
                            <p>El usuario o contraseña ingresados no son correctos.</p>
                            <a href=/web-app/signup class=btn>Registrarse</a>
                        </div>
                        ";
                    }
                    if(isset($_GET['ban'])){
                        echo "
                        <div id=problema>
                            <p>El usuario con el que intenta ingresar esta banneado, comuniquese con un administrador.</p>
                        </div>
                        ";
                    }
                    if(isset($_GET['alta'])){
                        echo "<p>Ya podés iniciar sesión.</p>";
                    }
                ?>
            </div>
            <input class="btn" type="submit" value="Iniciar sesión"/>
        </fieldset>
    </form>

</main>

<?php require('views/partials/footer.php'); ?>
