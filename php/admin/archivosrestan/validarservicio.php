<?php
$carpeta = 'uploads';
$ruta = dirname(__FILE__) . '/' . $carpeta;

if (!file_exists($ruta)) {
    if (mkdir($ruta, 0777, true)) {
        echo 'Carpeta creada exitosamente.';
    } else {
        echo 'Error al crear la carpeta.';
    }
} else {
    echo 'La carpeta ya existe.';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $tipo_servicio = isset($_POST['tipo_servicio']) ? $_POST['tipo_servicio'] : "";
    $titulo_servicio = isset($_POST['titulo_servicio']) ? $_POST['titulo_servicio'] : "";
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";

    $foto = isset($_FILES['info_foto']['name']) ? $_FILES['info_foto']['name'] : "";
    $foto_temp = isset($_FILES['info_foto']['tmp_name']) ? $_FILES['info_foto']['tmp_name'] : "";

    if (!empty($foto_temp)) {
        $info_foto = "uploads/" . $foto;

        if (move_uploaded_file($foto_temp, $info_foto)) {
            // Archivo subido correctamente
            echo "Archivo subido correctamente.";

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

            $sentencia = $conexion->prepare("INSERT INTO tbl_servicios (foto, tipo_servicio, titulo_servicio, descripcion) VALUES (:foto, :tipo_servicio, :titulo_servicio, :descripcion)");

            $sentencia->bindParam(":foto", $info_foto);
            $sentencia->bindParam(":tipo_servicio", $tipo_servicio);
            $sentencia->bindParam(":titulo_servicio", $titulo_servicio);
            $sentencia->bindParam(":descripcion", $descripcion);

            if ($sentencia->execute()) {
                // Registro insertado correctamente en la base de datos
                if ($tipo_servicio == "mantenimiento") {
                    header("Location: mantenimiento.php?mensaje=Archivo subido correctamente.");
                    exit();
                } elseif ($tipo_servicio == "reparacion") {
                    header("Location: reparacion.php?mensaje=Archivo subido correctamente.");
                    exit();
                } else {
                    header("Location: otra_pagina.php?mensaje=Archivo subido correctamente.");
                    exit();
                }
            } else {
                // Error al insertar el registro en la base de datos
                echo "Error al insertar el registro en la base de datos.";
            }
        } else {
            // Error al mover el archivo
            echo "Error al mover el archivo.";
        }
    } else {
        // No se seleccionó ningún archivo
        echo "No se seleccionó ningún archivo.";
    }
}
?>
