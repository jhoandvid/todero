<!--PANEL DE ADMINISTRACION INICIOADMIN.HTML SECCION ESTADISTICAS-->
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
            margin: 20px;
        }
        
        .info {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            margin-top: 50px;
        }
        
        .info h2 {
            margin-top: 0;
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
            <img src="logo.png" alt="Logo">
        </div>
        <div class="navbar-buttons">
            <a href="inicioadmin.html">Inicio</a>
            <a href="contenido.php">Contenido</a>
            <a href="diseño.php">Diseño</a>
            <a href="estadisticas.php">Estadísticas</a>
            <a href="soporte.php">Soporte</a>
            <a href="login.php">Cerrar Sesión</a>
        </div>
    </nav>
    <div class="content">
        <div class="info">
            <h2>Bienvenido al Panel de Administración</h2>
            <p>Aquí encontrarás opciones para ver estadísticas, así como configurar la configuración general.</p>
        </div>

        <div class="management-section">
            <h3>Estadísticas</h3>
            <ul>
                <li><a href="#">Trabajadores</a></li>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Rendimiento</a></li>
                <li><a href="#">Dashboard</a></li>
            </ul>
        </div>

        <div class="management-section">
            <h3>Configuración</h3>
            <ul>
                <li><a href="#">Preferencias</a></li>
                <li><a href="#">Opciones de Seguridad</a></li>
                <li><a href="#">Configuración de SEO</a></li>
                <li><a href="#">Integraciones</a></li>
                <li><a href="#">Opciones de Configuración</a></li>
            </ul>
        </div>
    </div>
</body>
</html>