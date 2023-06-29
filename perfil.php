<?php
$servername = 'db';
$username = 'root';
$password = '123456';
$dbname = 'todero';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$queryInfo = "SELECT * FROM tbl_trabajador";
$queryServicios = "SELECT * FROM tbl_servicios";

$resultInfo = mysqli_query($conn, $queryInfo);
$resultServicios = mysqli_query($conn, $queryServicios);

if (!$resultInfo || !$resultServicios) {
    die("Error en la consulta: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');</style>
</head>
<body>
    <?php include('nav.php');?>
    <style>
    .container {
        margin-top: 20px;
        padding: 50px;
        background-color: #F9F9F9;
        border: 2px solid #CCCCCC;
        border-radius: 5px;
    }
    th {
        font-size: 15px; /* Cambia el valor según tus necesidades */
    }

    </style>


    <div class="container">
        <br><br><br>
        <button class="btn btn-primary"><a href="../auth/logint.php" style="color: #fff;">Actualizar Información + </a></button><br>
        <h1><font color="#F2DA63;" style="margin-left: 30px; margin-top: 80px;">Mi Información</font></h1><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Tipo de Documento</th>
                    <th>Numero de Documento</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Link Whatsapp</th>
                    <th>Documentos</th>
                    <th>Acciones</th> 
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultInfo)): ?>
                <tr>
                    <td><?= $row['ID']; ?></td>
                    <td><?= $row['nombre']; ?></td>
                    <td><?= $row['apellido']; ?></td>
                    <td><?= $row['tipo_documento']; ?></td>
                    <td><?= $row['numero_documento']; ?></td>
                    <td><?= $row['fecha_nacimiento']; ?></td>
                    <td><?= $row['telefono']; ?></td>
                    <td><?= $row['correo']; ?></td>
                    <td><?= $row['link_whatsapp']; ?></td>
                    <td><?= $row['documento_verificacion']; ?></td>
                    <td>
                      
                        <a href="../service/actualizar.php?id=<?= $row['ID']; ?>">Actualizar</a>
                        <a href="../service/eliminar.php?id=<?= $row['ID']; ?>" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        
        <button class="btn btn-primary"><a href="../service/crear.php" style="color: #fff;">Agregar Servicios + </a></button><br>
        <h1><font color="#F2DA63;" style="margin-left: 30px; margin-top: 100px;">Mis servicios</font></h1><br>
        <table class="table table-striped">
            <thead style="backgroud-color: #F2DA63;">
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Tipo de Servicio</th>
                    <th>Nombre del Servicio</th>
                    <th>Descripción</th>
                    <th>Acciones</th> <!-- Agregué una columna para las acciones -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultServicios)): ?>
                <tr>
                    <td><?= $row['ID']; ?></td>
                    <td><img src="<?= $row['foto']; ?>" alt="Foto del servicio" style="height:70px; widht:80px;"></td>
                    <td><?= $row['tipo_servicio']; ?></td>
                    <td><?= $row['titulo_servicio']; ?></td>
                    <td><?= $row['descripcion']; ?></td>
                    <td>
                        <a href="logint.php?id=<?= $row['ID']; ?>">Actualizar</a><br>
                        <a href="eliminar.php?id=<?= $row['ID']; ?>" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</a><br>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script>
        function eliminarRegistro(id) {
            if (confirm('¿Estás seguro de eliminar este registro?')) {
         
                fetch(`eliminar.php?id=${id}`)
                    .then(response => {
                        if (response.ok) {
                            // Actualizar la página después de la eliminación exitosa
                            location.reload();
                        } else {
                            alert('Error al eliminar el registro.');
                        }
                    })
                    .catch(error => {
                        alert('Error al eliminar el registro: ' + error);
                    });
            }
        }
    </script>
</body>
</html>
