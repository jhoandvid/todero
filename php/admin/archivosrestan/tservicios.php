<?php
include('validarservicio.php');
if ($foto_temp && move_uploaded_file($foto_temp, $info_foto)) {
    // Archivo subido correctamente
    echo "Archivo subido correctamente.";

    // ... Código para la conexión a la base de datos y guardar los datos ...

    // Redirigir a diferentes partes según el tipo de servicio
    if ($tipo_servicio == "mantenimiento") {
        header("Location: mantenimiento.php?mensaje=Archivo subido correctamente.");
    } elseif ($tipo_servicio == "reparacion") {
        header("Location: reparacion.php?mensaje=Archivo subido correctamente.");
    } else {
        header("Location: otra_pagina.php?mensaje=Archivo subido correctamente.");
    }
    exit();
} else {
    // Error al mover el archivo
    echo "Error al mover el archivo.";
}
?>

