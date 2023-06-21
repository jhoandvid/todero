<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');</style>
    <style>
        body {
            background-color: #d9d9d9;
            margin: 0;
        }

        .navbar {
            background-color: #f29f05;
            display: flex;
            align-items: center;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
        }

        .navbar-logo {
            width: 4cm;
            height: 1.5cm;
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
        }

        select[name="catalogo"] {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="img/logo.png" alt="Logo">
        </div>
        <div class="navbar-buttons">
            <a href="inicio.html" style="margin-right: 10px;">Inicio</a>
            <label for="catalogo" style="color: #FFF; font-weight: normal; margin-top: 0.2cm;">Catálogo:</label>
            <select name="catalogo" required>
                <option value="Fontaneria">Fontanería</option>
                <option value="Electricidad">Electricidad</option>
                <option value="Carpinteria">Carpintería</option>
                <option value="Pintura">Pintura</option>
                <option value="Albañileria">Albañilería</option>
                <option value="Servicios generales">Servicios generales</option>
            </select>
            <a href="#">Perfil</a>
            <a href="#">Cerrar Sesión</a>
        </div>
    </nav>
    <!-- Resto del contenido -->
</body>
</html>