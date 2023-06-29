<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todero";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];
    $rol = $_POST['rol'];

  
    $sql = "SELECT * FROM tbl_registro WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'";
    $result = $conn->query($sql);

} else {
    echo "No se recibieron datos del formulario";
}


if ($rol === 'administrador') {

    header("Location: inicioadmin.html");
    exit();
} elseif ($rol === 'trabajador') {
  
    header("Location: iniciot.html");
    exit();
} elseif ($rol === 'usuario') {
  
    header("Location: inicion.html");
    exit();
} else {
    header("Location: inicion.html");
    exit();
}
?>

$conn->close();
?>
