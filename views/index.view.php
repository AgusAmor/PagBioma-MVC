<?php require('views/partials/connect.php'); ?>

<?php require('views/partials/session.php'); ?>

<?php require('views/partials/head.php'); ?>

<?php require('views/partials/header.php'); ?>

<main>
<section>
        <img class="banner" src="img/banner.jpg" alt="banner"/>
        <section>
            <h1>Bienvenidos a BIOMA</h1>
            <div id="botones">
                <button id="btn_login">Iniciar Sesión</button>
                <button id="btn_signup">Registrarse</button>
                
            </div>
        </section>
    </section>
    <section id="cat" class="seccion">
        <img src="img/verdu.jpeg" alt="ver catalogo"/>
        <div>
            <h2>¿Querés hacer un pedido aparte del bolsón?</h2>
            <p>Si lo que buscás no está en el bolsón de hoy podés hacer tu pedido aparte o bien agregar ese producto que hoy no esta en el bolsón y llevarlo aparte para no perdertelo.</p>
            <button id="btn_catalogo">Ver Catálogo</button>
        </div>
    </section>
    <section id="log" class="seccion">
        <div>
            <h2>¿Todavía no reservaste tu bolsón?</h2>
            <p>Hace tu pedido 100% online, para más información ingresá a la sección de bolsones.</p>
            <button id="btn_bolson">Reservar Bolsón</button>
        </div>
        <img src="img/bolsones.jpeg" alt="registrarse"/>
</section>

</main>

<?php require('views/partials/footer.php'); ?>
