<?php require('views/partials/connect.php');

require('views/partials/session.php');

require('views/partials/head.php');

require('views/partials/header.php');
if (isset($_GET['nom']) && isset($_GET['apell']) && isset($_GET['mail']) 
        && isset($_GET['cel']) && isset($_GET['bolsa']) && isset($_GET['pago']) && isset($_GET['env'])){

        $nom = $_GET['nom'];
        $apell = $_GET['apell'];
        $mail = $_GET['mail'];
        $cel = $_GET['cel'];
        $bolsa = $_GET['bolsa'];
        $pago = $_GET['pago'];
        $env = $_GET['env'];
        
        if (isset($_GET['acla'])){
            $acla = $_GET['acla'];
        }else{
            $acla = "";
        }

        $destino = "biomaurquiza@gmail.com";
        $asunto = "Pedido de bolson";
        if($env == 'envio'){
            if(isset($_GET['domicilio']) && isset($_GET['timbre']) && isset($_GET['local'])){
                $domicilio = $_GET['domicilio'] . " | " . $_GET['timbre'] . " | " . $_GET['local'];

                $consulta = "UPDATE usuario SET direccion = '$domicilio' WHERE email = '$mail'";
                $resultado = mysqli_query($con, $consulta);

            }
            $cuerpo = "
                    <div class=mail>
                        <h2>Mensaje enviado</h2>
                        <p>Pedido de bolsón de $nom $apell: </p>
                        <p>Telefono: $cel </p>
                        <p>Tiene bolsa?: $bolsa </p>
                        <p>Como paga?: $pago </p>
                        <p>Envios: $env </p>
                        <p>Direccion: $domicilio</p>
                        <p>Aclaraciones: $acla </p>
                    </div>
                    ";           
        }else{
            $cuerpo = "
                        <div class=mail>
                            <h2>Mensaje enviado</h2>
                            <p>Pedido de bolsón de $nom $apell: </p>
                            <p>Telefono: $cel </p>
                            <p>Tene bolsa?: $bolsa </p>
                            <p>Como paga?: $pago </p>
                            <p>Envios: $env </p>
                            <p>Aclaraciones: $acla </p>
                        </div>
                        ";
        }
        $remitente = "From: agustinwamor@gmail.com";

        echo "$cuerpo";
        echo "
            <div class=cardGracias>
            <h2>¡Gracias por tu pedido!</h2>
            <p>En caso de teer alguna consulta acerca del bolsón no dudes en escribirnos.</p>
            </div>
        ";
        

        // if (mail($destino, $asunto, $cuerpo, $remitente)) {
        //     echo "Correo enviado con éxito. Gracias por tu pedido.";
        // } else {
        //     echo "Error al enviar el correo. Por favor, inténtalo de nuevo.";
        // }



        }

?>