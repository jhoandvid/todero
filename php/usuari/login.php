<!--FORMULARIO DE ACCESO-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
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
            margin-top: 100px;
            border-radius: 15px;
        }
        .form-register {
            margin: 0;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        .sec {
            font-size: 10px;
            border: none;
            display: block;
            text-align: center;
            color: #000;
            text-decoration: none;
        }
        .text {
            margin-top: 20px;
            text-align: center;
            
        }
        input[type="text"]{
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
        .button-container {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
include('navprincipal.php');
?>

    <div class="container">
        <form class="form-register" action="validarlogin.php" method="POST">
        <div class="text">
                <h4 style="font-size: 30px;"><font color="#F2DA63;">Iniciar Sesion</font></h4>
            </div><br>
            <div class="form-group">
                <label for="usuario"></label>
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario"
                    required>
            </div>

            <div class="form-group">
                <label for="contrasenia"></label>
                <input type="password" name="contrasenia" id="contrasenia" class="form-control" placeholder="Contraseña"
                    required>
            </div>

            <select name="rol" required style="padding: 5px; border: 2px solid #F29F05; text-align: center; justify-content: center; margin: 0 auto; display: block;">
                    <option value="default" disabled selected>Seleccione su rol:</option>
                    <option value="usuario">Usuario</option>
                    <option value="trabajador">Prestador de servicio</option>
                    <option value="administrador">Administrador</option>
            </select>
            <br>


            <div class="button-container">
            <input type="submit" value="Ingresar" style="width: 150px; height: 35px; font-size: 15px;" class="btn btn-warning"><br><br>

                <a href="registro.php" style="font-size: 14px; border: none; background-color:#D9D9D9; width: 150px; height:35;"
                class="btn btn-default"><font color="#000;">Registrarme</font></a><br></center>
            </div>

            <br>
            <a  class="sec" href="olvidaste_contrasenia.php">Olvidé mi contraseña</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7og..."></script>

</body>

</html>