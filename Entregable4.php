<?php
session_start();

// Verifica si el usuario ha iniciado sesión
$nombre_usuario = isset($_SESSION['nombre_usuario']) ? $_SESSION['nombre_usuario'] : '';

// Incluir seguridad adicional para evitar XSS
$nombre_usuario = htmlspecialchars($nombre_usuario, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Libro de Reclamaciones</title>
    <script src="JS/inicio.js"></script>
    <script src="JS/Ejercicios2.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link rel="stylesheet" type="text/css" href="CSS/ejercicio.css">
</head>
<body>
<?php include("header.php"); ?>

    <div class="Ejercicio">
    <h1>Libro de Reclamaciones</h1>
        <form action="reclamo.php" method="post" onsubmit="return verificar()">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="reclamo">Reclamo:</label><br>
            <textarea id="reclamo" name="reclamo"></textarea><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <a href="ejercicio2.php">Siguiente ejercicio</a> 
    
    <?php include("footer.php"); ?>
</body>
</html>
