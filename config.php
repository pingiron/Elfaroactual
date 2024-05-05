<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Nombre de usuario predeterminado en XAMPP
$password = ""; // Contraseña predeterminada en XAMPP (generalmente vacía por defecto)
$dbname = "elfaro";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
