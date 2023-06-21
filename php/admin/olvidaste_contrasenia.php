<!--FORMULARIO DE OLVIDASTE TU CONTRASEÑA-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');

        body {
            background-color: #F2DA63;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 0 20px;
            max-width: 680px;
            margin: 0 auto;
        }

        .text {
            font-size: 25px;
            margin-top: 2px;
        }

        .formrecuperar {
            width: 100%;
            max-width: 390px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            height: 300px;
            border-radius: 15px;
            margin-left: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .formrecuperar input[type="submit"] {
            margin-top: 10px;
            font-size: 18px;
            height: 35px;
            width: 125px;
            background-color: #F2DA63;
            border: none;
            border-radius: 3px;
        }

        .formrecuperar input[type="email"] {
            border-radius: 5px;
            font-size: 15px;
            border: 2px solid orange;
            width: 215px;
        }
        .formrecuperar input[type="password"] {
            border-radius: 5px;
            font-size: 15px;
            border: 2px solid orange;
            width: 215px;
        }

        /* Estilos para los botones de Google y Facebook */
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .button-container button {
            margin: 0 5px;
        }

        .form-group {
            margin-left: 72px;
        }
        .text {
            text-align: center;
            justify-content: center;
        }

    </style>
</head>

<body>
<?php
include('navprincipal.php');
?>
    <div class="container">
        <form class="formrecuperar" action="validarecuperacion.php" method="POST">
            <div class="text">
                <h4><font color="#F2DA63;">¿Olvidó su contraseña?</font></h4>
                <h4>Por favor ingrese su correo electronico con una nueva contraseña</h4>
    </div>
            <div class="form-group">
                <label for="correo"></label>
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input type="password" name="Password" id="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <input type="submit" value="Enviar" class="btn btn-warning">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7og..."></script>
</body>
</html>


