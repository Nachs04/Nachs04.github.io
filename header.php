<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
    <!-- Aquí puedes incluir tus hojas de estilo CSS, scripts JS, meta tags, etc. -->
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="CSS/bla.css">
    <script src="script.js"></script>
    
</head>
<body>
    <header>
    <header class="header">
    <div class="Contenedor">
            <a href="index.php"><img id="logo" src="Recursos/Imagenes/Big1.png" alt="Logo"></a>
            <ul id="opciones">
                
                <li><a onclick="salida()">Ultimas noticias</a></li>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="empresas.php">Importancia del Big Data</a></li>
                <li><a href="Entregable3.php">Entregable 3</a></li>
                <li><a href="Entregable4.php">Entregable 4</a></li>
                <li><a href="libro_de_reclamo.php"><img id="img" src="Recursos/Imagenes/libro.png"></a></li>
            </ul>
            <span id="user-name"><?php echo $nombre_usuario; ?></span>
            <?php if (empty($nombre_usuario)): ?>
                <a class="login" href="login.php">Iniciar Sesión</a>
            <?php else: ?>
                <a class="logout" href="logout.php">
                    Cerrar Sesión
                    <img src="Recursos/imagenes/salir2.png" alt="">
                </a>
            <?php endif; ?>
        </div>
        <button class="botonMenu"><img src="Recursos/menu.png" alt="Menu"></button>
    </header>
    </header>

    <main>
        
