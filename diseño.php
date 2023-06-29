<!--PANEL DE DISEÑO ADMINISTRACION INICIOADMIN.HTML-->
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
        
        .logo{
            width: 200px;
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
            margin-top: 60px; /* Espacio para evitar que el contenido quede detrás de la navbar */
            padding: 20px;
        }
        
        .info {
            text-align: center;
            margin-top: 40px;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
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
            <img src="./img/logo.png"  style="width: 200px; height: 100px;" alt="Logo">
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
            <p>Aquí encontrarás opciones para personalizar el aspecto y la estructura del sitio.</p>
        </div>

        <div class="management-section">
            <h3>Gestión de Diseño</h3>
            <ul>
                <li><a href="#">Seleccionar Tema</a></li>
                <li><a href="#">Configurar Widgets</a></li>
                <li><a href="#">Administrar Menús</a></li>
                <li><a href="#">Opciones de Diseño</a></li>
            </ul>
        </div>
    </div>
</body>
</html>