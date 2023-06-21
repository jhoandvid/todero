<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todero";

$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Evitar la inyección SQL utilizando consultas preparadas
$sql = "SELECT * FROM tbl_registro WHERE usuario = ? AND contrasenia = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $contrasenia);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $fila = $result->fetch_assoc();
    $id_rol = $fila['id_rol'];

    $sqlRol = "SELECT * FROM tbl_rol WHERE ID = ?";
    $stmtRol = $conn->prepare($sqlRol);
    $stmtRol->bind_param("i", $id_rol);
    $stmtRol->execute();
    $resultRol = $stmtRol->get_result();

    if ($resultRol->num_rows > 0) {
        $filaRol = $resultRol->fetch_assoc();
        $enlaceNav = $filaRol['enlace_nav'];

        if ($enlaceNav == "usuario") {
            header("Location: bienvenidausu.php");
        } elseif ($enlaceNav == "administrador") {
            header("Location: bienvenidatrabajador.php");
        } elseif ($enlaceNav == "trabajador") {
            header("Location: inicio.html"); // Reemplaza "inicio.html" con la ruta de la página para trabajadores
        } else {
            echo "<script>alert('Error: No se encontró la página correspondiente al rol.'); window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('Error: No se encontró el enlace de navegación correspondiente al rol.'); window.location.href = 'login.php';</script>";
    }
} else {
    echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href = 'login.php';</script>";
}

// Cerrar conexión
$stmt->close();
$stmtRol->close();
$conn->close();
?>
