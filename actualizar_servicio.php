<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todero";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $servicios_id = $_GET['id'];
    $query = "SELECT * FROM tbl_servicios WHERE servicios_id = $servicios_id";
   // $query = "SELECT * FROM tbl_servicios WHERE ID = $servicios_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $tservicios = mysqli_fetch_assoc($result);
    } else {
        die("servicio no encontrado.");
    }
} else {
    die("ID del servicio no especificado.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_documento = $_POST['numero_documento'];
    $foto = $_POST['foto'];
    $tipo_servicio = $_POST['tipo_servicio'];
    $titulo_servicio = $_POST['titulo_servicio'];
    $descripcion = $_POST['descripcion'];

    // Construye una consulta SQL dinámica para actualizar los campos que se proporcionaron
    $updateQuery = "UPDATE tbl_servicios SET ";
    $updateFields = array();

    if (!empty($numero_documento)) {
        $updateFields[] = "numero_documento = '$numero_documento'";
    }
    if (!empty($foto)) {
        $updateFields[] = "foto = '$foto'";
    }
    if (!empty($tipo_servicio)) {
        $updateFields[] = "tipo_servicio = '$tipo_servicio'";
    }
    if (!empty($titulo_servicio)) {
        $updateFields[] = "titulo_servicio = '$titulo_servicio'";
    }
    if (!empty($descripcion)) {
        $updateFields[] = "descripcion = '$descripcion'";
    }

    // Comprueba si hay campos para actualizar
    if (!empty($updateFields)) {
        $updateQuery .= implode(", ", $updateFields);
        $updateQuery .= " WHERE servicios_id = $servicios_id";

        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            header("Location: gestionarservicio.php?servicios_id=$servicios_id");
            exit();
        } else {
            die("Error al actualizar el servicio: " . mysqli_error($conn));
        }
    } else {
        echo "No se proporcionaron campos para actualizar.";
    }
}

mysqli_close($conn);

include('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Actualizar Trabajador</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="date"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
            border: 2px solid orange; 
        }
        input[type="submit"] {
            background-color: #F2DA63;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #E8C64F;
        }
        .cancel-btn {
            background-color: #D9D9D9;
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
        }
        .cancel-btn:hover {
            background-color: #BFBFBF;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="formservicios" action="actualizar_servicio_conex.php" method="POST" enctype="multipart/form-data">
            <h1><font color="#F2DA63;" style="margin-left: 30px;">Registrar Servicios</font></h1>
            <div class="form-group">
                <label for="numero_documento">Número de Documento:</label>
                <input type="text" id="numero_documento" name="numero_documento" class="form-control">
            </div>

            <div class="form-group">
                <label for="info_foto">Foto:</label>
                <input class="form-control" type="file" name="info_foto">
            </div>

            <div class="form-group">
                <label for="tipo_servicio">Tipo de servicio (mantenimiento, reparación):</label>
                <select class="form-control" name="tipo_servicio">
                    <option value="mantenimiento">Mantenimiento</option>
                    <option value="reparacion">Reparación</option>
                </select>
            </div>

            <div class="form-group">
                <label for="titulo_servicio">Nombre del servicio:</label>
                <select class="form-control" name="titulo_servicio">
                    <option value="Fontaneria">Fontanería</option>
                    <option value="Electricidad">Electricidad</option>
                    <option value="Carpinteria">Carpintería</option>
                    <option value="Pintura">Pintura</option>
                    <option value="Albañileria">Albañilería</option>
                    <option value="Servicios generales">Servicios generales</option>
                </select>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción del servicio:</label>
                <input class="form-control" type="text" name="descripcion" placeholder="Descripción del servicio">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-warning" style="width: 150px; height: 35px; font-size: 15px;">Agregar</button>
                <a class="btn btn-primary" style="font-size: 15px; border:none; background-color:#D9D9D9; width: 150px;" class="btn btn-default"><font color="#000;">Cancelar</font></a><br></center></a>
            </div>
        </form>
    </div>
</body>
</html>
