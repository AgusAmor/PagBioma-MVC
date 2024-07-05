<?php require('views/partials/connect.php'); ?>

<?php require('views/partials/session.php'); ?>

<?php require('views/partials/head.php'); ?>

<?php require('views/partials/header.php'); ?>

<main>
<form action="" method="post" id="registrarse_form">
        <fieldset>
            <legend>Registrate</legend>
            <div>
                <label for="nom">Nombre <strong>*</strong></label>
                <input id="nom" name="nom" type="text" required/>
            </div>
            <div>
                <label for="apell">Apellido <strong>*</strong></label>
                <input id="apell" name="apell" type="text" required/>
            </div>
            <div>
                <label for="user">Correo electrónico <strong>*</strong></label>
                <input id="user" name="user" type="email" required/>
            </div>
            <div>
                <label for="pass">Contraseña <strong>*</strong></label>
                <input id="pass" name="pass" type="password" required/>
            </div>
            <div>
                <label for="pass2">Confirmar contraseña <strong>*</strong></label>
                <input id="pass2" name="pass2" type="password" required/>
            </div>
            <input id="altaUser" type="submit" value="Registrarse"/>
        </fieldset>
    </form>


</main>
    <script>
        var pass = document.getElementById('pass');
        var pass2 = document.getElementById('pass2');
        var btn_altaUser = document.getElementById('altaUser');
        var registrarseForm = document.getElementById('registrarse_form');

        btn_altaUser.onclick = function(event) {
            event.preventDefault();
            if (pass.value !== pass2.value) {
                alert("Las contraseñas no coinciden");
            } else {
                registrarseForm.action = "/web-app/signupCheck";
                registrarseForm.submit();
            }
        }
    </script>

<?php require('views/partials/footer.php'); ?>
