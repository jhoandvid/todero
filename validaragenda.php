<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $fecha = $_POST["fecha"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $disponibilidad = $_POST["disponibilidad"];
    $descripcion = $_POST["descripcion"];

 

   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todero";

  
    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 
    $sql = "INSERT INTO tbl_agendar (fecha, direccion, telefono, disponibilidad, descripcion) VALUES ('$fecha', '$direccion', '$telefono', '$disponibilidad', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        header("Location: magenda.php?mensaje=Archivo subido correctamente.");
        header("location: perfil.php");
    } else {
      
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
    $conn->close();
}
?>
