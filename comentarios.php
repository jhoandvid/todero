<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sección de Comentarios</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .comment-section {
            margin-top: 30px;
        }

        .comment {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .comment .user {
            font-weight: bold;
            color: #333;
        }

        .comment .date {
            color: #777;
            font-size: 12px;
        }

        .comment .content {
            margin-top: 5px;
            color: #555;
        }

        .comment-form {
            margin-top: 30px;
        }

        .comment-form input[type="text"],
        .comment-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .comment-form button {
            background-color: #f29f05;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        .content {
            margin-top: 50px; /* Espacio para evitar que el contenido quede detrás de la navbar */
            padding: 30px;
        }

        .project-card {
            background-color:#F2DA63; /* Agregado el color de fondo amarillo */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            display: flex; /* Agregado para usar flexbox */
            align-items: center; /* Agregado para alinear verticalmente */
        }

        .card img {
            max-width: 100%;
            margin-right: 20px; /* Agregado margen derecho para separar la imagen del texto */
        }

        .display-1 {
            text-align: center;
            margin-top: 60px;
            font-size: 65px;
            color: #f29f05;
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
            background-color: #f29f05;
            border-radius: 10px;
        }

        select[name="catalogo"] {
            margin-left: 10px;
        }
    </style>
</head>
<body>
<?php 
include('navtrabajador.php');
?>

    <div class="container" style="margin-top: 50px;">
        <h2>Sección de Comentarios</h2>

        <div class="comment-section">
            <div class="comment">
                <div class="user">Usuario 1</div>
                <div class="date">Fecha y hora del comentario</div>
                <div class="content">Contenido del comentario.</div>
            </div>
            <div class="comment">
                <div class="user">Usuario 2</div>
                <div class="date">Fecha y hora del comentario</div>
                <div class="content">Contenido del comentario.</div>
            </div>
            <!-- Agrega más comentarios aquí -->
        </div>

        <div class="comment-form">
            <h3>Deja un comentario:</h3>
            <input type="text" placeholder="Nombre de usuario">
            <input type="text" placeholder="Correo electrónico">
            <textarea placeholder="Escribe tu comentario"></textarea>
            <button>Enviar Comentario</button>
        </div>
    </div>
</body>
</html>