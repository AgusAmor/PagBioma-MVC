<?php require('views/partials/connect.php');

require('views/partials/session.php');

require('views/partials/admin/headAdmin.php');

require('views/partials/admin/headerAdmin.php');

if($con){
    $id;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
    }

    $consulta = "SELECT * FROM producto WHERE id = '$id'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado){
        $fila=mysqli_fetch_array($resultado);
        echo "<h1>Modificación de producto</h1>";
        echo "
        <form action=/web-app/admin/modProductoCheck method=post enctype=multipart/form-data>
            <fieldset>
                <legend>Modificar $fila[nombre]</legend>
                <div>
                    <h2>Codigo del producto: $fila[id]</h2>
                    <input type=hidden name=id value=$fila[id] />
                </div>
                <div>
                    <label for=nom >Nombre</label>
                    <input type=text id=nom name=nom value=$fila[nombre] />
                </div>
                <div>
                    <label for=tipo >Tipo</label>";
                    switch($fila['tipo']){
                        case "organico":
                            echo "
                            <select name=tipo id=tipo>
                                <option value=organico selected>Orgánico</option>
                                <option value=agroecologico >Agroecológico</option>
                            </select>
                            ";
                        break;
                        case "agroecologico":
                            echo "
                            <select name=tipo id=tipo>
                                <option value=organico>Orgánico</option>
                                <option value=agroecologico selected>Agroecológico</option>
                            </select>
                            ";
                        break;
                    }
                echo "
                </div>
                <div>
                    <label for=precio >Precio</label>
                    <input type=number id=precio name=precio value=$fila[precio] />
                </div>
                <div id=imgProducto>
                    <label for=pic >Imagen</label>
                    <input type=file id=pic name=pic value=$fila[imagen] />
                    <div>
                        <p>Imagen actual</p>
                        <a href=../img/catalogo/$fila[imagen] target=blank ><img src=../img/catalogo/$fila[imagen] /></a>
                    </div>
                </div>
                <div>
                    <label for=cate >Categoría</label>
                    <select name=cate id=cate>";
                            $consulta = "SELECT * FROM categoria";
                            $resultado = mysqli_query($con, $consulta);
                            while ($filab = mysqli_fetch_array($resultado)){
                                if ($filab['id'] == $fila['categoria_id']){
                                    echo "<option value=$filab[id] selected>$filab[nombre]</option>";
                                }else{
                                    echo "<option value=$filab[id]>$filab[nombre]</option>";
                                }
                            }
                    echo"
                    </select>
                </div>
                <input class=enviarBtn type=submit value=Enviar />
                <a href=/web-app/admin/productos class=enviarBtn>Volver</a>
            </fieldset>
        </form>
        ";
    }
}
?>