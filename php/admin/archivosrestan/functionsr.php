<?php
function mostrarTarjetas($resultado) {
    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../styles.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #d9d9d9;
            margin: 0;
        }

        .navbar {
            background-color: #F29F05;
            display: flex;
            align-items: center;
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
        }

        .navbar-logo {
            width: 4cm;
        }

        .navbar-logo img {
            width: 100%;
        }

        .navbar-buttons {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Cambio de 'flex-start' a 'space-between' */
            margin-left: auto;
        }

        .navbar-buttons a {
            color: white;
            text-decoration: none;
            padding: 5px;
            margin-right: 20px;
            font-weight: normal; /* Cambio de 'bold' a 'normal' */
        }
        .navbar-buttons a:not(:last-child) {
            margin-right: 0; /* Eliminar el margen derecho */
        }
        .navbar-buttons label {
            margin-right: 10px; /* Espacio entre "Catalogo" y "Perfil" */
        }
        .navbar-buttons a:hover {
            background-color: #f2da63;
            color: #000;
        }
        .content {
            margin-top: 35px; /* Espacio para evitar que el contenido quede detrás de la navbar */
            padding: 30px;
        }

        .card {
            margin-left: 3cm;
            margin-top: 80px;
            width: 20%;
        }

        .display-1 {
            text-align: center;
            margin-top: 60px;
            font-size: 65px;
            color: #F29F05;
        }

        .display-2 {
            text-align: center;
            font-size: 35px;
        }

        .description {
            font-size: 18px;
            text-align: center;
            margin: 0 auto;
            max-width: 720px;
        }

        .btn {
            display: block;
            margin: 30px auto;
            background-color: #F29F05;
            border-radius: 10px;
        }

        .carousel-inner img {
            height: 400px; /* Ajusta la altura de las imágenes del carrusel */
        }

        select[name="catalogo"] {
            margin-left: 10px;
        }
        
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="navbar-buttons">
            <a href="#">Inicio</a>
            <label for="catalogo" style="color: #FFF;">Catalogo:</label>
            <select name="catalogo" required>
                <option value="Fontaneria">Fontanería</option>
                <option value="Electricidad">Electricidad</option>
                <option value="Carpinteria">Carpintería</option>
                <option value="Pintura">Pintura</option>
                <option value="Albañileria">Albañilería</option>
                <option value="Servicios generales">Servicios generales</option>
            </select>
            <a href="perfil.php">Perfil</a>
            <a href="login.php">Cerrar Sesión</a>
        </div>
    </nav>
    <!-- Resto del contenido -->
  
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
        </body>
        </html>
        <div class="card">
            <img src="<?php echo $fila['foto']; ?>" alt="Foto del servicio" class="card-img-top" style="height: 40%;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $fila['titulo_servicio']; ?></h5>
                <p class="card-text"><?php echo $fila['descripcion']; ?></p>
            </div>
        </div>
        <?php
    }
}
?>
