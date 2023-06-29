<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>

    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../styles/index.css">
    <link>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');</style>
    <style>
        body {
            background-color: #F2DA63;
            margin: 0;
        }

        .navbar {
            background-color: #F29F05;
            display: flex;
            align-items: center;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999999;
        }

        .navbar-logo {
            width: 7cm;
        }

        .navbar-logo img {
            width: 100%;
        }

        .navbar-buttons {
            margin-left: auto;
        }

        .navbar-buttons a {
            color: rgb(0, 0, 0);
            text-decoration: none;
            padding: 10px;
            margin-right: 10px;
        }

        .navbar-buttons a:hover {
            background-color: #F2DA63;
        }

        .content {
            margin-top: 60px; /* Espacio para evitar que el contenido quede detrás de la navbar */
            padding: 20px;
        }

        .card {
            margin-left: 3cm;
        }

        select[name="catalogo"] {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
        <img src="../../images/logoTod.png" alt="Logo" alt="#" style="width: 200px; height: 100px;"/>

        </div>
        <div class="navbar-buttons">
            <a href="#" style="margin-right: 10px;">Inicio</a>
            <a href="#">Servicios</a>
            <a href="#">Nuestros servcios</a>
            <a href="#">Nosotros</a>
            <a href="#">Portafolio</a>
            <a href="#">Conctactenos</a>
        </div>
    </nav>
    <!-- Resto del contenido -->
</body>
</html>