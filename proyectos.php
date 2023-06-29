<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>proyectos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../styles.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #d9d9d9;
            margin: 0;
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
    <div class="content"> <!-- Agregado el contenedor para el contenido principal -->
        <div class="projects">
            <div class="project-card">
                <img src="imagen1.jpg" alt="Proyecto 1">
                <div style="margin-left: 5px;"></div>
                <div>
                    <h3>Proyecto 1</h3>
                    <p>Descripción del proyecto 1.</p>
                </div>
            </div>
            <div class="project-card">
                <img src="imagen2.jpg" alt="Proyecto 2">
                <div style="margin-left: 20px;"></div>
                <div>
                    <h3>Proyecto 2</h3>
                    <p>Descripción del proyecto 2.</p>
                </div>
            </div>
            <div class="project-card">
                <img src="imagen3.jpg" alt="Proyecto 3">
                <div style="margin-left: 20px;"></div>
                <div>
                    <h3>Proyecto 3</h3>
                    <p>Descripción del proyecto 3.</p>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <img src="imagen4.jpg" alt="Proyecto 4">
                <div style="margin-left: 20px;"></div>
                <div>
                    <h3>Proyecto 4</h3>
                    <p>Descripción del proyecto 4.</p>
                </div>
            </div>
            <div class="project-card">
                <img src="imagen5.jpg" alt="Proyecto 5">
                <div style="margin-left: 20px;"></div>
                <div>
                    <h3>Proyecto 5</h3>
                    <p>Descripción del proyecto 5.</p>
                </div>
            </div>
            <div class="project-card">
                <img src="imagen6.jpg" alt="Proyecto 6">
                <div style="margin-left: 20px;"></div>
                <div>
                    <h3>Proyecto 6</h3>
                    <p>Descripción del proyecto 6.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>