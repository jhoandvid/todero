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
    $trabajador_id = $_GET['id'];

    //$query = "SELECT * FROM tbl_trabajador WHERE trabajador_id = $trabajador_id";
    $query = "SELECT * FROM tbl_trabajador WHERE ID = $trabajador_id";

    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $trabajador = mysqli_fetch_assoc($result);
    } else {
        die("Trabajador no encontrado.");
    }
} else {
    die("ID del trabajador no especificado.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateFields = array();
    
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $updateFields[] = "nombre = '$nombre'";
    }
    
    if (!empty($_POST['apellido'])) {
        $apellido = $_POST['apellido'];
        $updateFields[] = "apellido = '$apellido'";
    }
    
    if (!empty($_POST['tipo_documento'])) {
        $tipo_documento = $_POST['tipo_documento'];
        $updateFields[] = "tipo_documento = '$tipo_documento'";
    }
    
    if (!empty($_POST['numero_documento'])) {
        $numero_documento = $_POST['numero_documento'];
        $updateFields[] = "numero_documento = '$numero_documento'";
    }
    
    if (!empty($_POST['fecha_nacimiento'])) {
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $updateFields[] = "fecha_nacimiento = '$fecha_nacimiento'";
    }
    
    if (!empty($_POST['telefono'])) {
        $telefono = $_POST['telefono'];
        $updateFields[] = "telefono = '$telefono'";
    }
    
    if (!empty($_POST['correo'])) {
        $correo = $_POST['correo'];
        $updateFields[] = "correo = '$correo'";
    }
    
    if (!empty($_POST['link_whatsapp'])) {
        $link_whatsapp = $_POST['link_whatsapp'];
        $updateFields[] = "link_whatsapp = '$link_whatsapp'";
    }
    
    if (!empty($_FILES['documento_verificacion']['name'])) {
        
        $documento_verificacion = $uploadedFile;
        $updateFields[] = "documento_verificacion = '$documento_verificacion'";
    }
    
    if (!empty($updateFields)) {
        $updateQuery = "UPDATE tbl_trabajador SET " . implode(", ", $updateFields) . " WHERE trabajador_id = $trabajador_id";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            header("Location: actualizacion_trabajador_mensaje.php?registro_id=$trabajador_id");
            exit();
        } else {
            die("Error al actualizar el trabajador: " . mysqli_error($conn));
        }
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
    <title>Actualizar Usuario</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width:27%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 100px;
        }

        
      

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            width: 100%;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 2px solid orange;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #f2da63;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #e6c34d;
        }
    </style>
</head>
<body>
    <?php include('nav.php'); ?>

    <div class="container">
        <h2>Actualizar Usuario</h2>

        <form method="POST">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" value="<?= $registro['usuario']; ?>">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="<?= $registro['nombre']; ?>">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" value="<?= $registro['apellido']; ?>">
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" name="correo" id="correo" value="<?= $registro['correo']; ?>">
            </div>
            <div class="form-group">
                <label for="contrasenia">Contraseña</label>
                <input type="password" name="contrasenia" id="contrasenia" value="<?= $registro['contrasenia']; ?>">
            </div>
            <div class="form-group" style="text-align: center;">
                <button type="submit">Actualizar</button>
            </div>
        </form>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
