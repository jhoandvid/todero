<!--FORMULARIO DE REGISTRO DE TRABAJADORES-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login trabajador</title>
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            margin-top: 480px;
        }
        .formtrabajador {
            margin: 0;
            margin-left: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        .display-4{
            font-size: 35px;
            text-align: center;
            width: 650px;
            margin-left: 25px;
            margin-top: 200px;
        }
        .form-control {
            font-size: 18px;
            height: 45px;
            width: 100%;
            padding: 10px;
            border-color: #F2DA63;
            outline: none;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .controls {
            width: 100%;
            height: 30px;
        }
  
    input[type="submit"] {
        width: 150px;
        height: 30px;
        font-size: 15px;
        text-align: center;
        border: none;
        }

    input[type="text"] {
        border: 2px solid orange;
        }

    input[type="date"] {
        border: 2px solid orange;
        }  
    input[type="email"] {
        border: 2px solid orange;
        } 
        .display-5 {
            margin-left: 50px; 
            text-align: center;
            width: 560px;
            font-size: 30px;
            margin-top: 250px;
        }
        .titulo{
            text-align: center;
            color:#D9A404;
        }
    </style>
</head>
<body>
<?php
include('../common/navprincipal.php');
?>
<h1 class="display-5"><font color="#000;">"</font>Optimiza tu trabajo y mejora tu servicio<br>únete a nuestro sistema de gestión de solicitudes de mantenimiento en Fusagasugá"</h1>
        </div>
       <div class="container">
        <form class="formtrabajador" action="validatrabajador.php" href="inicio.html" method="POST" enctype="multipart/form-data">
            <h1 class="titulo" <font color="#F2DA63;">Formulario de Registro</font></h1>
            <br>
            <div class="form-group">
                <label for="nombre">Nombres:</label>
                <input class="controls" type="text" name="nombre" placeholder="Nombres" required><br>
            </div>
            <div class="form-group">
                <label for="apellido">Apellidos:</label>
                <input class="controls" type="text" name="apellido" placeholder="Apellidos" required><br>
            </div>
            <div class="form-group">
                <label for="tipo_documento">Tipo de documento:</label>
                <select class="controls" name="tipo_documento" type="select" id="tipo_documento" style="border: 2px solid orange;">
                    <option value="DNI">DNI</option>
                    <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                    <option value="Cedula de extranjeria">Cedula de extranjeria</option>
                    <option value="Pasaporte">Pasaporte</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numero_documento">Numero de documento:</label>
                <input class="controls" type="text" name="numero_documento" placeholder="Numero de documento" required><br>
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                <input class="controls" type="date" name="fecha_nacimiento" required><br>
            </div>

            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input class="controls" type="text" name="telefono" placeholder="Telefono" required><br>
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input class="controls" type="email" name="correo" placeholder="Correo Electronico" required><br>
            </div>

            <div class="form-group">
                <label for="link_whatsapp">Enlace de WhatsApp:</label>
                <input class="controls" type="text" name="link_whatsapp" placeholder="Link Whatsapp" required><br>
            </div>

            <div class="form-group">
                <label for="documento_verificacion">Documento de verificación (PDF):</label>
                <input class="controls" type="file" name="documento_verificacion" required accept="application/pdf">
            </div>

            <center><input class="btn btn-warning" type="submit" href="inicio.html" value="Registrar"></center><br>
            <center><a href="login.php">Regresar</a></center>
        </form>
    </div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>">
</body>
</html>