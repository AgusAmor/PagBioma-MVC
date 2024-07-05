<?php require('views/partials/connect.php');

require('views/partials/session.php');

require('views/partials/admin/headAdmin.php');

require('views/partials/admin/headerAdmin.php');

if($con){
    $id;
    if(isset($_GET['id'])){
        $id = $_GET['id']; 
    }

    $consulta = "SELECT * FROM categoria WHERE id = '$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado){
        $fila=mysqli_fetch_array($resultado);
        echo "<h1>Modificación de categoría</h1>";
        echo "
        <form action=/web-app/admin/modCategoriaCheck method=post >
            <fieldset>
                <legend>Modificar $fila[nombre]</legend>
                <div>
                    <h2>Codigo categoría: $fila[id]</h2>
                    <input type=hidden name=id value=$fila[id] />
                </div>
                <div>
                    <label for=nom >Nombre</label>
                    <input type=text id=nom name=nom value=$fila[nombre] />
                </div>
                <input class=enviarBtn type=submit value=Enviar />
                <a href=/web-app/admin/categorias class=enviarBtn>Volver</a>
            </fieldset>
        </form>
        ";
    }
}
?>