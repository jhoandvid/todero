
<?php
include "functionsm.php";

$servidor = "localhost";
$db = "todero";
$usuario = "root";
$contrasenia = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $contrasenia);
} catch (PDOException $error) {
    echo $error->getMessage();
    exit();
}

$query = "SELECT * FROM tbl_servicios WHERE tipo_servicio = 'reparacion'";
$resultado = $conexion->query($query);

if ($resultado) {
    mostrarTarjetas($resultado);
} else {
    echo "Error en la consulta: " . $conexion->errorInfo()[2];
}
?>
