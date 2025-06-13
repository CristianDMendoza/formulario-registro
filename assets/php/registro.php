<?php
/* Incluir base de datos */
include_once('conection.php');

// Extracción de datos del formulario
$Nombre = $_POST['Name'];
$Apellido = $_POST['Apellido'];
$Email = $_POST['Email'];
$Contraseña = $_POST['Contraseña'];

// Insertar en la base de datos
$registro = "INSERT INTO users (Nombre, Apellido, Email, Pasword) 
             VALUES ('$Nombre', '$Apellido', '$Email', '$Contraseña')";

// Ejecutar consulta
$validacion = mysqli_query($conection, $registro);

// Validación del resultado
if ($validacion) {
    header('Location: ../public/inicio.html');
    exit(); // Recomendado para evitar ejecución posterior
} else {
    echo "Error inesperado: no se guardaron correctamente los datos. " . mysqli_error($conection);
}
?>
