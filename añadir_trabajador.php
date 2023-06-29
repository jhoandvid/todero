<?php

$servername = "db";
$username = "root";
$password = "";
$dbname = "todero";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {


    die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nombre = $_POST["nombre"];


    $apellido = $_POST["apellido"];

    $$tipo_documento = $_POST["tipo_documento"];

    $$numero_documento = $_POST["numero_documento"];

    $$fecha_nacimiento = $_POST["fecha_nacimiento"];

    $$telefono = $_POST["telefono"];

    $$correo = $_POST["correo"];

    $$link_whatsapp = $_POST["link_whatsapp"];

    $$documento_verificacion = $_FILES["documento_verificacion"]["name"];






    // Validate the form fields here (e.g., check for empty fields, validate email format, etc.)






    // Insert the data into the database

    $$query = "INSERT INTO tbl_trabajador (nombre, apellido, tipo_documento, numero_documento, fecha_nacimiento, telefono, correo, link_whatsapp, documento_verificacion) 
              VALUES ('$nombre', '$apellido', '$tipo_documento', '$numero_documento', '$fecha_nacimiento', '$telefono', '$correo', '$link_whatsapp', '$documento_verificacion')";




    if (mysqli_query($conn, $query)) {
        header('location:gestiontrabajadores.php');


        echo "Registro exitoso";
    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Trabajador</title>
</head>
<style>
    .container {
        max-width: 500px;
        margin: 50px auto;

    }

    h2 {
        margin-bottom: 30px;
        
    }

    h1 {
        text-align: center;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    input[type="email"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 15px;
        border: 2px solid orange;
    }

    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 15px;
        border: 2px solid orange;
    }

    input[type="submit"] {
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        justify-content: center;
        position: center;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

</style>

<body>
    <?php
    include('navtrabajador.php');
    ?>

    <h2>Actualizar Trabajador</h2>
    <form method="POST" action="">
        <div class="container">
            <form class="formtrabajador" action="validatrabajador.php" method="POST" enctype="multipart/form-data">
                <h1 style="margin-top: 80px;" class="titulo" <font color="#F2DA63;">Añadir trabajador</font>
                </h1>
                <br>
                <div class="form-group">
                    <label for="nombre">Nombres:</label>
                    <input class="controls" type="text" name="nombre" placeholder="Nombres"><br>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellidos:</label>
                    <input class="controls" type="text" name="apellido" placeholder="Apellidos"><br>
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
                    <input class="controls" type="text" name="numero_documento" placeholder="Numero de documento"><br>
                </div>

                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                    <input class="controls" type="date" name="fecha_nacimiento"><br>
                </div>

                <div class="form-group">
                    <label for="telefono">Telefono:</label>
                    <input class="controls" type="text" name="telefono" placeholder="Telefono"><br>
                </div>

                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input class="controls" type="email" name="correo" placeholder="Correo Electronico"><br>
                </div>

                <div class="form-group">
                    <label for="link_whatsapp">Enlace de WhatsApp:</label>
                    <input class="controls" type="text" name="link_whatsapp" placeholder="Link Whatsapp"><br>
                </div>

                <div class="form-group">
                    <label for="documento_verificacion">Documento de verificación (PDF):</label>
                    <input class="controls" type="file" name="documento_verificacion" accept="application/pdf">
                </div>

                <button class="btn btn-warning" type="submit" value="Actualizar">Actualizar</button>
            </form>
</body>

</html>