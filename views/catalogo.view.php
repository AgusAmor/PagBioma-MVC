<?php require('views/partials/connect.php'); ?>

<?php require('views/partials/session.php'); ?>

<?php require('views/partials/head.php'); ?>

<?php require('views/partials/header.php'); ?>

<main>
<section>
        <h1>Catálogo</h1>
            <div class="catalogo">
                <?php
                    $consulta = "SELECT * FROM producto";
                    $resultado = mysqli_query($con, $consulta);
                    
                    $contador = 0;
                    echo "<div class=second>";
                    while($fila = mysqli_fetch_array($resultado)){
                        echo "
                        <div>
                            <img src=img/catalogo/$fila[imagen] alt=$fila[nombre]/>
                            <h2>$fila[nombre]</h2>
                            <h3>$fila[tipo]</h3>
                        </div>";
                        $contador++;
                        if ($contador == 5){
                            echo "</div>";
                            echo "<div class='second'>";
                            $contador = 0;
                        }
                    }
                    
                ?>
            </div>
    </section>
</main>

<?php require('views/partials/footer.php'); ?>
