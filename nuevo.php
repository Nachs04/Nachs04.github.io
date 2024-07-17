<?php
session_start();

if (!isset($_SESSION['cod_usuario'])) {
    header("Location: login.php");
    exit();
}

$nombre_usuario = isset($_SESSION['nombre_usuario']) ? $_SESSION['nombre_usuario'] : '';

// Incluye seguridad adicional para evitar XSS
$nombre_usuario = htmlspecialchars($nombre_usuario, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="user-info">
            <span id="user-name"><?php echo $nombre_usuario; ?></span>
        </div>
    </header>
    <script src="scripts.js"></script>
</body>
</html>
