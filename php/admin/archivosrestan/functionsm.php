<?php
function mostrarTarjetas($resultado) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>

            .card-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .card {
                flex-basis: 48%; /* Establece el ancho de cada tarjeta */
                margin-bottom: 20px;
            }
            .card-img-top {
                height: 200px;
                object-fit: cover;
            }
            .card-body {
                padding: 10px;
            }
            .card-title {
                font-size: 18px;
                margin-bottom: 5px;
            }
            .card-text {
                font-size: 14px;
                color: #666;
            }
        </style>
    </head>
    <body>
        
        <div class="card-container">
        <?php
        while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="card">
                <img src="<?php echo $fila['foto']; ?>" alt="Foto del servicio" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $fila['titulo_servicio']; ?></h5>
                    <p class="card-text"><?php echo $fila['descripcion']; ?></p>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </body>
    </html>
    <?php
}
?>
