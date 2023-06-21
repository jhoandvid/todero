<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');</style>
    <style>         
         text-bg {
         text-align: center;
      }

      body {
            background-color: #F2DA63;
            margin: 0;
        }

        .navbar {
            background-color: #F29F05;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999999;
            height: 109px;
        }

        .navbar-logo {
            width: 7cm;
            padding-left: 10px;
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
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="../../images/logoTod.png" style="width: 200px; height: 100px;" alt="Logo">
        </div>
        <div class="navbar-buttons">
            <a href="inicio.html" style="margin-right: 10px;">Inicio</a>
            <label for="catalogo" style="color: #000; font-weight: normal; margin-top: 0.2cm;">Catálogo:</label>
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