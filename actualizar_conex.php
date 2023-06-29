<?php
$servername = "db";
$username = "root";
$password = "";
$dbname = "todero";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $ID = $_GET['id'];

    $query = "SELECT * FROM tbl_registro WHERE ID = $ID";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $tservicios = mysqli_fetch_assoc($result);
    } else {
        die("servicio no encontrado.");
    }
} else {
    die("ID del registro no especificado.");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateFields = array();

    if (!empty($_POST['usuario'])) {
        $nombre = $_POST['usuario'];
        $updateFields[] = "usuario = '$usuario'";
    }
    
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $updateFields[] = "nombre = '$nombre'";
    }

    if (!empty($_POST['apellido'])) {
        $apellido = $_POST['apellido'];
        $updateFields[] = "apellido = '$apellido'";
    }
    if (!empty($_POST['correo'])) {
        $correo = $_POST['correo'];
        $updateFields[] = "correo = '$correo'";
    }
    if (!empty($_POST['contrasenia'])) {
        $contrasenia = $_POST['contrasenia'];
        $updateFields[] = "contrasenia = '$contrasenia'";
    }
    if (!empty($updateFields)) {
        $updateQuery = "UPDATE tbl_registro SET " . implode(", ", $updateFields) . " WHERE ID = $ID";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            header("Location: actualizacion_usuario_mensaje.php?registro_id=$ID");
            exit();
        } else {
            die("Error al actualizar el trabajador: " . mysqli_error($conn));
        }
    }
}
    
include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');

        body {
            background-color: #F2DA63;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            max-width: 400px;
            width: 100%;
            border-radius: 15px;
            margin-top: 490px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .form-register {
            margin: 0;
        }

        .display-4 {
            margin-top: 300px;
            text-align: center;
            font-size: 40px;
            color: 000;
            margin-left: 60px;
        }

        .btn-warning {
            background-color: #FFC107;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .btn-warning:hover {
            background-color: #FFA000;
        }

        .sec {
            font-size: 12px;
            border: none;
            width: 150px;
            display: block;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            color: #000;
            text-decoration: none;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            height: 40px;
            border: 2px solid orange;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
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

        h4 {
            margin: 0;
            font-size: 20px;
            color: #F2DA63;
        }

        ul {
            margin-top: 10px;
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 10px;
        }
        
    </style>
</head>
<?php include('navprincipal.php')?>

<body>
  
    <div class="container">
        <form class="form-register"  action="" method="POST" enctype="multipart/form-data">
            <div class="text">
                <h2 style="text-align:center">Registro</h2><br>
            </div>
            <div class="form-group">
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario"><br>
            </div>
            <div class="form-group">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombres"><br>
            </div>
            <div class="form-group">
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellidos"><br>
            </div>
            <div class="form-group">
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo electrónico"><br>
            </div>
            <div class="form-group">
                <input type="password" name="contrasenia" id="contrasenia" class="form-control"
                    placeholder="Contraseña">
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <select name="rol" class="form-control" style="border: 2px solid orange;">
                    <option value="administrador">Administrador</option>
                    <option value="trabajador">Trabajador</option>
                    <option value="usuario">Usuario</option>
                </select>
            </div>
            <div class="botones">
                <center><input type="submit" value="Registrar" name="Registrar" class="btn btn-warning"></center>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
