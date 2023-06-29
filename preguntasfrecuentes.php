<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas y Respuestas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');

        body {
            background-color: #F2DA63;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            margin: 70px auto;
            max-width: 800px;
        }

        .text {
            margin-top: 20px;
            text-align: center;
            font-family: 'Mukta', sans-serif;
        }

        /* Estilos para el menú de navegación */
        .navbar {
            background-color: #F29F05;
        }

        .navbar-logo {
            width: 90px;
            padding: 10px;
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

    </style>
</head>
<body>
<?php 
include('nav.php');?>

<div class="container">

    <div class="row">
        <div class="col-md-10 mx-auto">
            <br><br><br>
            <h2>¿Cómo puedo solicitar un servicio de mantenimiento?</h2><br>
            <p>Para solicitar un servicio de mantenimiento, sigue estos pasos:</p>
            <ol>
                <li>Inicia sesión en tu cuenta de usuario.</li>
                <li>Navega hasta la sección de servicios o búsqueda de servicios.</li>
                <li>Encuentra la categoría o tipo de servicio que necesitas.</li>
                <li>Explora las opciones disponibles y selecciona el servicio específico que deseas solicitar.</li>
                <li>Lee la descripción del servicio, las tarifas y cualquier otra información relevante.</li>
                <li>Si estás satisfecho con los detalles del servicio, haz clic en el botón "Solicitar" o "Contratar".</li>
                <li>Se te puede pedir que proporciones detalles adicionales, como la fecha y hora preferida para el servicio, la dirección donde se realizará, etc.</li>
                <li>Proporciona la información solicitada y confirma la solicitud.</li>
                <li>Una vez que hayas solicitado el servicio, el proveedor de servicios correspondiente recibirá la solicitud y se pondrá en contacto contigo para coordinar los detalles finales.</li>
            </ol>
        </div>
    </div>

    <!-- Repite el mismo patrón para las demás preguntas -->

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
