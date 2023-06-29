<?php 
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

$servicio_id = $_GET['id'];

$query = "SELECT t.nombre, t.apellido, t.telefono, t.correo, t.link_whatsapp, s.titulo_servicio, s.descripcion, s.foto
          FROM tbl_trabajador AS t
          INNER JOIN tbl_servicios AS s ON t.numero_documento = s.numero_documento
          WHERE s.servicios_id = :servicio_id";

$consulta = $conexion->prepare($query);
$consulta->bindParam(':servicio_id', $servicio_id);
$consulta->execute();

if ($consulta && $consulta->rowCount() > 0) {
    $trabajador = $consulta->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Información del Trabajador y Servicio</title>
    <style>
           @import url('https://fonts.googleapis.com/css2?family=Mukta:wght@800&display=swap');

body {
    background-color: #d9d9d9;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    height: 100vh;
    flex-direction: row;
}

.card {
    background-color: #f5f5f5;
    padding: 20px;
    margin: 10px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 450px;
}

.card h2 {
    color: #333;
    margin-top: 0;
}

.card p {
    color: #666;
    margin-bottom: 10px;
}
.info_trabajador{
    text-align: left;
}
.text {
    margin-top: 20px;
    text-align: center;
}
input[type="text"]{
    height: 30px;
    border: 2px solid orange;
}
input[type="password"]{
    height: 30px;
    border: 2px solid orange;
}
input[type="number"]{
    height: 30px;
    border: 2px solid orange;
}
input[type="date"]{
    height: 30px;
    border: 2px solid orange;
}
.form-control {
    border-color: #F2DA63;
}
.button-container {
    text-align: center;
}
.form-container {
    margin-left: 10px; 
}
</style>
</head>
<body>
<?php include('nav.php');?>
<br><br>

<div class="container">
<div class="card">
    <br>
    <h2>Información del Servicio</h2><br>
    <p>Nombre del Servicio: <?php echo $trabajador['titulo_servicio']; ?></p><br>
    <img src="<?php echo $trabajador['foto']; ?>" alt="Imagen del servicio" style="width: 350px; display: block; margin: 0 auto; border-radius: 5px; padding: 5px; margin-bottom: 10px;"><br>

    <p>Descripción: <?php echo $trabajador['descripcion']; ?></p>
    <br>
    <div class="info_trabajador">
        <p><b>Información del Trabajador</b></p>
        <p><b>Nombre: </b><?php echo $trabajador['nombre']; ?>&nbsp;<?php echo $trabajador['apellido']; ?></p>
        <p><b>Teléfono: </b><?php echo $trabajador['telefono']; ?></p>
        <p><b>Correo: </b><?php echo $trabajador['correo']; ?></p>
        <p><b>Link WhatsApp: </b><?php echo $trabajador['link_whatsapp']; ?></p>
    </div>
</div>

<div class="form-container">
    <form class="form-register" action="validaragenda.php" method="POST">
        <div class="text"><br><br>
            <h1>Agendar Servicio</h1>
        </div><br>
        <div class="form-group">
            <label for="fecha"></label>
            <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha" required>
        </div>

        <div class="form-group">
            <label for="direccion"></label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" required>
        </div>
        <div class="form-group">
            <label for="telefono"></label>
            <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required><br>
        </div>
        <select name="disponibilidad" required style="padding: 5px; border: 2px solid #F29F05; text-align: center; justify-content: center; margin: 0 auto; display: block;">
            <option value="default" disabled selected>Seleccione la disponibilidad de su servicio:</option>
            <option value="usuario">Urgente</option>
            <option value="trabajador">Programada</option>
        </select>

        <div class="form-group">
            <label for="descripcion"></label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion" required>
        </div>
        
        <br>

        <div class="button-container">
            <input type="submit" value="Ingresar" style="width: 150px; height: 35px; font-size: 15px;" class="btn btn-warning"><br><br>
        </div>

        <br>
    </form>
    <?php
    
    ?>
</div>
</div>
</body>
</html>


