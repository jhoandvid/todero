<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida a todero</title>
    <style>
       

        body {
            background-color: #D9D9D9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #F2DA63;
            padding: 20px;
            text-align: center;
            border-radius: 15px;
        }

        .welcome-message {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .next-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #D9A404;
            color: #f2f2f2;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .next-link:hover {
            background-color: #F2DA63;
        }

        @media (max-width: 768px) {
            .welcome-message {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-message">¡Bienvenid@ a todero Tus datos han sido guardados correctamente.</div>
        <a href="login.php" class="next-link">Siguiente</a>
    </div>
</body>
</html>
