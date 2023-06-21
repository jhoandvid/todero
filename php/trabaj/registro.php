<!--FORMULARIO DE REGISTRO TRABAJADOR-->

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
            background-color: #eeeeec;
            background-color: #F2DA63;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 20px;
            max-width: 400px;
            width: 100%;
            border-radius: 15px;
            margin-top: 700px;
            height: 1100px;
        }
        .form-register {
            margin: 0;
            margin-left: 20px;
            margin-top: 3%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        .sec {
            font-size: 10px;
            border: none;
            width: 150px;
            display: block;
            text-align: center;
            margin-left: 80px;
            color: #000;
            text-decoration: none;
        }
        .display-4{
            margin-top: 100px;
            justify-content: center;
            margin-left: 35px;
            text-align: center;
        }
        .botones {
            font-size: 15px;
            margin-left: -30px; 
            justify-content:center; 
        }
        input[type="text"]{
        height: 30px;
        color: #F2DA63;
        border: 2px solid orange;
        }
        input[type="email"]{
            height: 30px;
            border: 2px solid orange;

        }
        input[type="password"]{
            height: 30px;
            border: 2px solid orange;
        }
        .form-control {
        border-color: #F2DA63;
        }
        .terms {
            margin-top: 20px;
            background-color: white;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<?php
include("navprincipal.php");
?>

<body>
<h1 class="display-4">Con nuestro sistema web, <br><b>¡tu inmueble siempre en buen estado!</b></h1><br>
    <div class="container">
        <br>
        <form class="form-register" action="validaregistro.php" method="POST">
            <div class="text">
                <h4 style="font-size: 30px; margin-left: 35px; margin-top: 20px;"><font color="#F2DA63;">Registro usuarios</font></h4>
            </div><br>
            <div class="form-group">
                <label for="usuario"></label>
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="usuario" required>
            </div><br>
            <div class="form-group">
                <label for="nombre"></label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombres" required>
            </div><br>
            <div class="form-group">
                <label for="apellido"></label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellidos" required>
            </div><br>
            <div class="form-group">
                <label for="correo"></label>
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo electrónico" required>
            </div><br>
            <div class="form-group">
                <label for="contrasenia"></label>
                <input type="password" name="contrasenia" id="contrasenia" class="form-control" placeholder="Contraseña" required>
            </div><br>
            <div class="form-group">
                <input type="checkbox" id="aceptarTerminos" required>
                <label for="aceptarTerminos">Acepto los términos y condiciones</label>
            </div>
            <div class="botones">
                <center><input type="submit" style="width: 150px; height: 35px;" value="Registrar" name="Registrar" class="btn btn-warning"><br>
                <br>
                <a href="logint.php" style="font-size: 15px; border: none; background-color:#D9D9D9; width: 150px;" class="btn btn-default"><font color="#000;">¡Busco trabajo!</font></a><br></center>
            </div>

            <a class="sec" href="olvidaste_contrasenia.php" >Olvidé mi contraseña</a><br>
            <a class="sec" href="login.php">Iniciar Sesión</a>

            <?php
            echo '<script src="terminos.js"></script>';
            ?>
            <div class="terms">
                <h4>Términos y Condiciones:</h4>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Nulla rutrum, dui ut lobortis euismod, ex sem aliquam quam, eget maximus est elit id lacus.</li>
                    <li>Vestibulum luctus ligula sit amet ex tincidunt, id placerat ligula ultricies.</li>
                    <li>Donec ac condimentum erat, ut auctor leo.</li>
                    <li>Proin eu imperdiet ligula.</li>
                </ul>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
