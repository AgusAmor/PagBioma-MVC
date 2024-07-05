<?php require('views/partials/connect.php'); ?>

<?php require('views/partials/session.php'); ?>

<?php require('views/partials/head.php'); ?>

<?php require('views/partials/header.php'); ?>

<main>
<section>
        <h1>Bolsón Orgánico</h1>
        <div id="infoBolson">
            <div>
                <h2>¿Qué es un bolsón?</h2>
                <p>Es una bolsa con 8kg de fruta y verdura orgánica y agroecológica, se realizan los días martes y viernes de todas las semanas.</p>
            </div>
            <div>
                <h2>¿Qué trae?</h2>
                <p>El contenido va variando cada bolsón, los armamos con mercadería fresca que ingresa en el día, de la huerta a tu casa.</p>
                <p>Avisamos que contenido va a traer 3 días antes de que se arme por medio de nuestras redes, y tenes tiempo desde que subimos el contenido hasta el dia anterior al bolsón a las 20hs para reservar el tuyo.</p>
            </div>
            <div>
                <h2>¿Hacen envíos?</h2>
                <p>Al completar el formulario se pide especificar si se pasa a retirar por el local o si se prefiere que te lo llevemos a tu domicilio.</p>
                <p>En caso de elegir la opcion de retiro nosotros avisamos cuando el bolsón esta listo para retirar y se lo puede pasar a buscar entre las 13 y las 20hs.</p>
                <p>Los envíos son sin costo en un rango de 15 cuadras sin costo adicional y se realizan entre las 13 y 16hs por el personal del local.</p>
                <p>Si se excede el rango horario o de distancia para los envíos podes contratar un servicio de delivery para que lo pase a buscar por el local y te lo lleve a tu casa.</p>
            </div>
            <div>
                <h2>Bolsa BIOMA</h2>
                <p>En BIOMA cuidamos el mediuo ambiente y llevamos a cabo prácticas sustentables, por eso implementamos un sistema de intercambio de bolsas.</p>
                <p>En tu primer pedido te incluimos una bolsa BIOMA por $200 y para tu próximo pedido te damos una sin costo adicional y la intercambiamos al momento de la entrega del bolsón.</p>
                <p>Para mantener este ciclo activo es importante que cuides tu bolsa, y asi se la podamos entregar a otro cliente en óptimas condiciones. Así cuidamos el planeta y nos ayudamos entre todos</p>
            </div>
        </div>
        <form action="/web-app/bolsonEnvios" method="get">
            <fieldset>
                <legend>Reservar Bolsón</legend>
                <div id="nombApell">
                    <div>
                        <label for="nom">Nombre <strong>*</strong></label>
                        <input type="text" name="nom" id="nom" required/>
                    </div>
                    <div>
                        <label for="apell">Apellido <strong>*</strong></label>
                        <input type="text" name="apell" id="apell" required/>
                    </div>
                </div>
                <div>
                    <label for="mail">Correo electrónico</label>
                    <input type="email" name="mail" id="mail"/>
                </div>
                <div>
                    <label for="cel">Número de teléfono <strong>*</strong></label>
                    <input type="num" name="cel" id="cel" required/>
                </div>
                <div>
                    <label for="bolsa">¿Tenés tu bolsa BIOMA? <strong>*</strong></label>
                    <div>
                        <label>
                            <input type="radio" name="bolsa" id="bolsa" value="si" required/> Si
                        </label>
                        <label>
                            <input type="radio" name="bolsa" id="bolsa" value="no" required/> No
                        </label>
                    </div>
                </div>
                <div>
                    <label for="pago">¿Cómo abonás tu bolsón? <strong>*</strong></label>
                    <div>
                        <label>
                            <input type="radio" name="pago" id="pago" value="eft" required/> Efectivo
                        </label>
                        <label>
                            <input type="radio" name="pago" id="pago" value="mp" required/> MercadoPago (QR)
                        </label>
                        <label>
                            <input type="radio" name="pago" id="pago" value="tj" required/> Tarjeta
                        </label>
                    </div>
                </div>
                <div>
                    <label for="env">Elegí si pasas a retirar o preferís que te lo enviemos a tu domicilio. <strong>*</strong></label>
                    <div>
                        <label>
                            <input type="radio" name="env" id="env" value="retiro" required/> Retiro
                        </label>
                        <label>
                            <input type="radio" name="env" id="env" value="envio" required/> Envio
                        </label>
                    </div>
                </div>
                <div>
                    <input class="enviarBtn" type="submit" value="Enviar"/>
                </div>
            </fieldset>
        </form>
    </section>

</main>

<?php require('views/partials/footer.php'); ?>
