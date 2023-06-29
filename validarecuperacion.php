<?php
// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $nuevaContraseña = isset($_POST['Password']) ? $_POST['Password'] : '';

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'todero';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Error de conexión a la base de datos: ' . $conn->connect_error);
    }

    // Buscar el correo en la base de datos
    $stmt = $conn->prepare("SELECT * FROM tbl_registro WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        // Actualizar la contraseña en la base de datos
        $stmt = $conn->prepare("UPDATE tbl_registro SET contrasenia = ? WHERE correo = ?");
        $stmt->bind_param("ss", $nuevaContraseña, $correo);
        if ($stmt->execute()) {
            header("Location: actualizacion_contrasenia.php?error=1");
        } else {
            echo 'Error al actualizar la contraseña: ' . $stmt->error;
        }
    } else {
        header("Location: olvidaste_contrasenia.php?error=1");
    }

    // Cerrar la conexión a la base de datos
    $stmt->close();
    $conn->close();
}
?>

<!-- Agrega el siguiente código para mostrar el mensaje de error si existe -->
<?php if (isset($error_message)) : ?>
    <div class="alert alert-danger"><?php echo $error_message; ?></div>
<?php endif; ?>
