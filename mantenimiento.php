<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Servicio</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');</style>
    <style>

    </style>
</head>
<body id="page-top bg-light">
    <div class="container">
        <h1>Información del Servicio</h1>
        <div class="card">
            <img src="uploads/<?php echo $_FILES['info_foto']['name']; ?>" class="card-img-top" alt="Foto del servicio" style="width: 300px; height: auto;">
            <div class="card-body">
                <h3 class="card-title">Datos ingresados:</h3>
                <p class="card-text">
                    <strong>Tipo de servicio:</strong> <?php echo $_POST['tipo_servicio']; ?><br>
                    <strong>Título del servicio:</strong> <?php echo $_POST['titulo_servicio']; ?><br>
                    <strong>Descripción del servicio:</strong> <?php echo $_POST['descripcion']; ?><br>
                </p>
            </div>
        </div>
        <a href="../service/crear.php" class="btn btn-primary">Actualizar</a>
        <a href="index.php" class="btn btn-primary">Borrar</a>
    </div>
</body>
</html>
