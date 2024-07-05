<?php require('views/partials/connect.php');

require('views/partials/session.php');

require('views/partials/head.php');

require('views/partials/header.php'); 

if(isset($_GET['nom'])){
    $nom =$_GET['nom'];
}
if(isset($_GET['apell'])){
    $apell =$_GET['apell'];
}
if(isset($_GET['mail'])){
    $mail =$_GET['mail'];
}
if(isset($_GET['cel'])){
    $cel =$_GET['cel'];
}
if(isset($_GET['bolsa'])){
    $bolsa =$_GET['bolsa'];
}
if(isset($_GET['pago'])){
    $pago =$_GET['pago'];
}
if(isset($_GET['env'])){
    $env =$_GET['env'];
}

if($env == 'envio'){
    echo "
    <form action=/web-app/bolsonEnviado method=get>
        <fieldset>
        <legend>Envios</legend>
            <div>
                <input type=hidden name=nom value=$nom />
                <input type=hidden name=apell value=$apell />
                <input type=hidden name=mail value=$mail />
                <input type=hidden name=cel value=$cel />
                <input type=hidden name=bolsa value=$bolsa />
                <input type=hidden name=pago value=$pago />
                <input type=hidden name=env value=$env />
            </div>
            <div>
                <label for=domicilio>Dirección <strong>*</strong></label>
                <input type=text id=domicilio name=domicilio required/>
            </div>
            <div>
                <label for=timbre>Casa/Timbre <strong>*</strong></label>
                <input type=text id=timbre name=timbre required/>
            </div>
            <div>
                <label for=local>Barrio <strong>*</strong></label>
                <input type=text id=local name=local required/>
            </div>
            <div>
                <label for=acla>Aclaraciones</label>
                <textarea id=acla name=acla placeholder='Si tenés aclaraciones van acá'></textarea>
            </div>
            <div>
                <input class=enviarBtn type=submit />
            </div>
        </fieldset>
    </form>";
}else{
    header ("Location: /web-app/bolsonEnviado?nom=$nom&apell=$apell&mail=&cel=$cel&bolsa=$bolsa&pago=$pago&env=$env");
}




?>
