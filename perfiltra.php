<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfiles de Trabajadores</title>
    <style>@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');</style>

    <style>
        .table-container {
            margin-top: 70px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    include('navtrabajador.php');
    ?>

    <div class="table-container">
        <br>
        <button class="btn btn_warning" style="margin-left:10px; "><a href="crear.php">Actualizar</a></button>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo de documento</th>
                    <th>Número de documento</th>
                    <th>Fecha de nacimiento</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Documento de verificación</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nombre_del_servidor = "db";
                $nombre_de_usuario = "root";
                $contraseña = "";
                $nombre_de_la_base_de_datos = "todero";

                $conexion = mysqli_connect($nombre_del_servidor, $nombre_de_usuario, $contraseña, $nombre_de_la_base_de_datos);

                if (!$conexion) {
                    die("Error de conexión: " . mysqli_connect_error());
                }

                // Consulta para obtener los datos de los trabajadores
                $consulta = "SELECT tbl_trabajador.nombre, tbl_trabajador.apellido, tbl_trabajador.tipo_documento, tbl_trabajador.numero_documento, tbl_trabajador.fecha_nacimiento, tbl_trabajador.telefono, tbl_trabajador.link_whatsapp, tbl_trabajador.documento_verificacion 
                             FROM tbl_trabajador 
                             JOIN tbl_servicios ON tbl_trabajador.numero_documento = tbl_servicios.numero_documento
                             LIMIT 1";

                // Ejecutar la consulta
                $resultados = mysqli_query($conexion, $consulta);

                // Verificar si se obtuvieron resultados
                if (mysqli_num_rows($resultados) > 0) {
                    $row = mysqli_fetch_assoc($resultados);
                    $nombre = $row['nombre'] . ' ' . $row['apellido'];
                    $tipo_documento = $row['tipo_documento'];
                    $numero_documento = $row['numero_documento'];
                    $fecha_nacimiento = $row['fecha_nacimiento'];
                    $telefono = $row['telefono'];
                    $correo = $row['link_whatsapp'];
                    $documento_verificacion = $row['documento_verificacion'];
                    ?>
                    <tr>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $tipo_documento; ?></td>
                        <td><?php echo $numero_documento; ?></td>
                        <td><?php echo $fecha_nacimiento; ?></td>
                        <td><?php echo $telefono; ?></td>
                        <td><?php echo $correo; ?></td>
                        <td><?php echo $documento_verificacion; ?></td>
                    </tr>
                    <?php
                } else {
                    echo "<tr><td colspan='7'>No se encontraron resultados.</td></tr>";
                }

                // Consulta para obtener los servicios con el mismo número de documento
                $consulta_servicios = "SELECT titulo_servicio, foto, tipo_servicio, descripcion 
                                       FROM tbl_servicios
                                       WHERE numero_documento = '$numero_documento'";

                // Ejecutar la consulta de los servicios
                $resultados_servicios = mysqli_query($conexion, $consulta_servicios);

                // Verificar si se obtuvieron resultados
                if (mysqli_num_rows($resultados_servicios) > 0) {
                    while ($row_servicio = mysqli_fetch_assoc($resultados_servicios)) {
                        $titulo_servicio = $row_servicio['titulo_servicio'];
                        $foto = $row_servicio['foto'];
                        $tipo_servicio = $row_servicio['tipo_servicio'];
                        $descripcion = $row_servicio['descripcion'];
                        ?>
                        <tr></tr>
                        <tr>
                            <td><?php echo $titulo_servicio; ?></td>
                            <td><img src="<?php echo $foto; ?>" alt="Foto del servicio" style="height:100px; width:180px;"></td>
                            <td><?php echo $tipo_servicio; ?></td>
                            <td><?php echo $descripcion; ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron servicios.</td></tr>";
                }

                // Cerrar la conexión a la base de datos
                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
