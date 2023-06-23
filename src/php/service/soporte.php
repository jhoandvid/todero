<!--SECCION DE SOPORTE DE INICIOADMIN.HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
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
            margin-top: 60px; /* Espacio para evitar que el contenido quede detrás de la navbar */
            padding: 20px;
        }
        
        .info {
            text-align: center;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            margin-top: 40px;
        }
        
        .info h2 {
            margin-top: 0px;
        }
        
        .info p {
            margin-bottom: 0;
        }
        .management-section {
            margin-top: 30px;
        }
        
        .management-section h3 {
            margin-bottom: 10px;
        }
        
        .management-section ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        
        .management-section li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<nav class="navbar">
        <div class="navbar-logo">
            <img src="../../images/logoTod.png" style="width: 200px; height: 100px;" alt="Logo">
        </div>
        <div class="navbar-buttons">
            <a href="inicioadmin.html">Inicio</a>
            <a href="../service/contenido.php">Contenido</a>
            <a href="../common/diseño.php">Diseño</a>
            <a href="../common/estadisticas.php">Estadísticas</a>
            <a href="../service/soporte.php">Soporte</a>
            <a href="../auth/login.php">Cerrar Sesión</a>
        </div>
    </nav>

    <div class="content">
        <div class="info">
            <h2>Bienvenido al Panel de Administración</h2>
            <p>Aquí encontrarás recursos de ayuda y soporte para asistirte en caso de problemas o consultas.</p>
        </div>

        <div class="management-section">
            <h3>Recursos de Ayuda y Soporte</h3>
            <ul>
                <li><a href="#">Documentación</a></li>
                <li><a href="#">Preguntas Frecuentes</a></li>
                <li><a href="#">Tutoriales</a></li>
                <li><a href="#">Contacto de Soporte Técnico</a></li>
            </ul>
        </div>
    </div>
</body>
</html>