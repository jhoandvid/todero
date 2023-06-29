<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['numero_documento'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $link_whatsapp = $_POST['link_whatsapp'];
    $documento_verificacion = $_FILES['documento_verificacion']['name'];

    if (empty($nombre) || empty($apellido) || empty($tipo_documento) || empty($numero_documento) || empty($fecha_nacimiento) || empty($telefono)  || empty($correo) || empty($link_whatsapp) || empty($documento_verificacion)) {
        header("Location: ");
        exit();
    } else {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "todero";

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("SELECT * FROM tbl_trabajador WHERE numero_documento = :numero_documento");
            $stmt->bindParam(':numero_documento', $numero_documento);
            $stmt->execute();

            

            if ($stmt->rowCount() > 0) {
                echo "Contraseña repetida, ingrese una nueva.";
                header("Location: logint.php?error=2");
                exit();
            } else {
                $stmt = $pdo->prepare("INSERT INTO tbl_trabajador (nombre, apellido, tipo_documento, numero_documento, fecha_nacimiento, telefono, correo, link_whatsapp, documento_verificacion) 
                VALUES (:nombre, :apellido, :tipo_documento, :numero_documento, :fecha_nacimiento, :telefono, :correo, :link_whatsapp, :documento_verificacion)");

                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':apellido', $apellido);
                $stmt->bindParam(':tipo_documento', $tipo_documento);
                $stmt->bindParam(':numero_documento', $numero_documento);
                $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
                $stmt->bindParam(':telefono', $telefono);
                $stmt->bindParam(':correo', $correo);
                $stmt->bindParam(':link_whatsapp', $link_whatsapp);
                $stmt->bindParam(':documento_verificacion', $documento_verificacion);
                
                $stmt->execute();

                // The record was successfully inserted into the database

                header("Location: bienvenidatrabajador.php?nombre=$nombre&apellido=$apellido&tipo_documento=$tipo_documento&numero_documento=$numero_documento&fecha_nacimiento=$fecha_nacimiento&telefono=$telefono&correo=$correo&link_whatsapp=$link_whatsapp&documento_verificacion=$documento_verificacion");
                exit();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
// Insertar los datos en la tabla tbl_trabajador
// Insertar los datos en la tabla tbl_trabajador
$stmt->execute();
$id_trabajador = $pdo->lastInsertId();
// Insertar el servicio en la tabla tbl_servicios
$stmt = $pdo->prepare("INSERT INTO tbl_servicios (trabajador_id, otro_campo) VALUES (:trabajador_id, :otro_campo)");
$stmt->bindParam(':trabajador_id', $id_trabajador);
$stmt->bindParam(':otro_campo', $valor_otro_campo);
$stmt->execute();


?>