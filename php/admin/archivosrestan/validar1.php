<?php
// archivo de conexión a la base de datos
include 'conect/conexion.php';
session_start();
/*
// Comprobar si el usuario ya ha iniciado sesión
if (isset($_SESSION['ced1'])) {
    // El usuario ya ha iniciado sesión, redirigir a la página principal
    header("url=index.php");
}
*/

// Comprobar si se envió el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $ced = $_POST['ced1'];
    $password =$_POST['pass'];
    $rol=$_POST['rol'];
    // Consulta para verificar las credenciales
    $query = "SELECT * FROM tblusuario WHERE Cedula = '$ced'";
    $row = mysqli_query($conact, $query);
    while($datos = mysqli_fetch_assoc($row)){
        if($ced != $datos['Cedula'] ){
            $error = "Credenciales inválidas. Por favor, inténtalo de nuevo.";
            print($error); 
        }
        elseif($password==$datos['Pasword']){
            if ($rol == 1) {
                // Iniciar sesión y guardar el rol en la variable de sesión
                $_SESSION['ced1'] = $ced;
                $_SESSION['rol'] = $rol;
                // Redirigir a la página principal
                header("Location: index.php");
            }else {
                // Las credenciales son inválidas, mostrar un mensaje de error
                $error = "Credenciales inválidas. Por favor, inténtalo de nuevo.";
                print($error);
            }
            if($rol == 2){
                $_SESSION['ced1'] = $ced;
                $_SESSION['rol'] = $rol;
                header("Location: in-gerente.php");
            } else {
                $error = "Credenciales inválidas. Por favor, inténtalo de nuevo.";
                print($error);
            }
        }else{
        $error = "Credenciales inválidas. Por favor, inténtalo de nuevo."; 
        print($error);
    }
}
}
?>