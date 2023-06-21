<!--FORMULARIO PARA CREAR SERVICIOS-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');</style>
    <style>
        body {
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
        }
        .formservicios {
            margin: 0;
        }
    </style>
</head>
<body id="page-top bg-light">
<?php
include('navprincipal.php');
?>
    <div class="container">
        <form class="formservicios" action="validarservicio.php" method="POST" enctype="multipart/form-data">
            <h1><font color="#F2DA63;" style="margin-left: 30px;">Registrar Servicios</font></h1>

            <label for="info_foto">Foto:</label>
            <input class="controls" type="file" name="info_foto" required><br>

            <label for="tipo_servicio">Tipo de servicio (mantenimiento, reparación):</label><br>
            <select class="controls" name="tipo_servicio" style="margin-left: 80px" required>
                <option value="mantenimiento">Mantenimiento</option>
                <option value="reparacion">Reparación</option>
            </select><br>

            <label for="titulo_servicio">Nombre del servicio:</label><br>
            <select class="controls" name="titulo_servicio" style="margin-left: 80px" required>
                <option value="Fontaneria">Fontaneria</option>
                <option value="Electricidad">Electricidad</option>
                <option value="Carpinteria">Carpinteria</option>
                <option value="Pintura">Pintura</option>
                <option value="Albañileria">Albañileria</option>
                <option value="Servicios generales">Servicios generales</option>
            </select><br>

            <label for="descripcion">Descripción del servicio:</label><br>
            <input class="controls" type="text" style="margin-left: 80px" name="descripcion" placeholder="Descripción del servicio" required><br>
            <br>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-warning" style="width: 150px; height: 35px; font-size: 15px;">Agregar</button>
                <a class="btn btn-primary" href="inicio.html" style="font-size: 15px; border:none; background-color:#D9D9D9; width: 150px;" class="btn btn-default"><font color="#000;">Cancelar</font></a><br></center></a>
            </div>
        </form>
    </div>
</body>
</html>
