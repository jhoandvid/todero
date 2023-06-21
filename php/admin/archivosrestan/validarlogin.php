<?php
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "basedatos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


session_start();

if (isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
    $correo = $_POST['usuario'];
    $contrasena = $_POST['contrasenia'];

    $sql = "SELECT u.*, r.rolUsuario, r.rolTrabajador, r.rolAdministrador 
            FROM tbl_registro u 
            INNER JOIN tbl_rol r ON u.rol_id = r.ID 
            WHERE u.usuario = '$usuario' AND u.contrasenia = '$contrasenia'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['usuario_nombre'] = $row['nombre'];

        if ($row['rolUsuario'] == 1) {
            $_SESSION['usuario_rol'] = 'usuario';

        } elseif ($row['rolTrabajador'] == 1) {
            $_SESSION['usuario_rol'] = 'trabajador';
            
        } elseif ($row['rolAdministrador'] == 1) {
            $_SESSION['usuario_rol'] = 'administrador';
        }

        header("Location: pagina_restringida.php");
        exit();
    } else {
        echo "Credenciales inválidas";
    }
}



?>