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
            font-family: Arial, sans-serif;
        }
        
        .navbar {
            background-color: #f29f05;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999999;
            height: 109px
        }

        .navbar-logo {
            width: 7cm;
            padding-left: 10px;
            
        }
        
        .logo{
            height: 91px;
            padding-top: 0px;
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
        .navbar-buttons a:not(:last-child) {
            margin-right: 0; /* Eliminar el margen derecho */
        }
        .navbar-buttons label {
            margin-right: 10px; /* Espacio entre "Catalogo" y "Perfil" */
        }
        .navbar-buttons a:hover {
            background-color: #F2DA63;
        }
        
        .content {
            margin-top: 118px; /* Espacio para evitar que el contenido quede detrás de la navbar */
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
            <img class="logo" src="./img/logo.png" style="width: 200px; height: auto;" alt="Logo">
        </div>
        <div class="navbar-buttons">
            <a href="#">Inicio</a>
            <a href="proyectos.php">Proyectos</a>
            <a href="comentarios.php">Comentarios</a>
            <a href="perfiltra.php">Perfil</a>
            <a href="inicion.html">Visualizar</a>
            <a href="login.php">Cerrar Sesión</a>
        </div>
    </nav>
    </body>
    </html>