<?php
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Verificar si las contraseñas coinciden
    if ($password === $confirm_password) {
        // Hash de la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Incluir el archivo de la clase UsuarioController
        require_once "UsuarioController.php";

        // Crear una instancia del controlador de usuario
        $usuarioController = new UsuarioController();

        // Registrar al nuevo usuario
        $nuevoUsuario = $usuarioController->registrarUsuario($nombre, $email, $hashed_password);

        if ($nuevoUsuario !== null) {
            echo "¡Registro exitoso! Bienvenido, " . $nuevoUsuario->getNombre();
        } else {
            echo "Error al registrar el usuario.";
        }
    } else {
        // Las contraseñas no coinciden, mostrar un mensaje de error
        echo "Error: Las contraseñas no coinciden.";
    }
}