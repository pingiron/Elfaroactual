<?php
// Incluir el archivo de configuración de la base de datos
require_once "config.php";

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario y validarlos
    $nombre = validarDatos($_POST["nombre"]);
    $email = validarDatos($_POST["email"]);
    $password = validarDatos($_POST["password"]);

    // Si algún campo está vacío, mostrar un mensaje de error
    if (empty($nombre) || empty($email) || empty($password)) {
        echo "Por favor, complete todos los campos del formulario.";
    } else {
        // Consulta SQL para insertar un nuevo usuario en la base de datos
        $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";

        // Preparar la consulta
        $stmt = $conn->prepare($sql);

        // Enlazar parámetros
        $stmt->bind_param("sss", $nombre, $email, $password);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Usuario registrado exitosamente";
            // Redireccionar al usuario a otra página
            // header("Location: otra_pagina.php");
            // exit();
        } else {
            echo "Error al registrar usuario: " . $conn->error;
        }

        // Cerrar la consulta preparada
        $stmt->close();
    }
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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
