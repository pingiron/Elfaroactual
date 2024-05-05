<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Borrar la cookie de la sesión
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destruir la sesión
session_destroy();

// Redirigir de vuelta a la página principal
header("Location: index.php");
exit();
?>
