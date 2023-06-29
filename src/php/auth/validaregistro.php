<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];

    if (empty($usuario) || empty($nombre) || empty($apellido) || empty($correo) || empty($contrasenia)) {
        header("Location: registro.php?error=1");
        exit();
    } else {

        $servername = "db";
        $username = "root";
        $password = "123456";
        $dbname = "todero";
        
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Verificar si la contraseña ya existe en la base de datos
            $stmt = $pdo->prepare("SELECT * FROM tbl_registro WHERE contrasenia = :contrasenia");
            $stmt->bindParam(':contrasenia', $contrasenia);
            $stmt->execute();
            
            if ($stmt->rowCount() > 0) {
                echo "contraseña repetida ingrese una nuevamente";
                header("Location: registro.php?error=2");
                exit();
            } else {
                // La contraseña no existe en la base de datos, proceder con el registro
                $stmt = $pdo->prepare("INSERT INTO tbl_registro(usuario, nombre, apellido, correo, contrasenia) VALUES (:usuario, :nombre, :apellido, :correo, :contrasenia)");

                $stmt->bindParam(':usuario', $usuario);
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':apellido', $apellido);
                $stmt->bindParam(':correo', $correo);
                $stmt->bindParam(':contrasenia', $contrasenia);

                $stmt->execute();
                header("Location: ../common/bienvenida.php?usuario=$usuario&nombre=$nombre&apellido=$apellido&correo=$correo");
                exit();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
