<?php
// Incluir el archivo de configuración de la base de datos
require_once "config.php";

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario y validarlos
    $email = validarDatos($_POST["email"]);
    $password = validarDatos($_POST["password"]);

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = ? AND password = ?";
    
    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Enlazar parámetros
    $stmt->bind_param("ss", $email, $password);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener el resultado de la consulta
    $result = $stmt->get_result();

    // Verificar si se encontró algún usuario con las credenciales proporcionadas
    if ($result->num_rows == 1) {
        // Iniciar sesión y guardar el nombre del usuario en la sesión
        session_start();
        $usuario = $result->fetch_assoc();
        $_SESSION["nombre_usuario"] = $usuario["nombre"]; // Guardar el nombre del usuario en la sesión
        header("Location: index.php"); // Redirigir a la página de inicio
        exit();
    } else {
        // Si las credenciales son incorrectas, mostrar un mensaje de error
        echo "Email o contraseña incorrectos.";
    }

    // Cerrar la consulta preparada
    $stmt->close();
}

// Función para validar los datos del formulario
function validarDatos($dato) {
    // Eliminar espacios en blanco al inicio y al final
    $dato = trim($dato);
    // Escapar caracteres especiales para evitar inyección de SQL
    $dato = htmlspecialchars($dato);
    return $dato;
}

// Cerrar la conexión
$conn->close();
?>
