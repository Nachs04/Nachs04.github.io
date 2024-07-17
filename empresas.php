<?php
session_start();

// Verifica si el usuario ha iniciado sesión
$nombre_usuario = isset($_SESSION['nombre_usuario']) ? $_SESSION['nombre_usuario'] : '';

// Incluir seguridad adicional para evitar XSS
$nombre_usuario = htmlspecialchars($nombre_usuario, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas que lo utilizan</title>
    <script src="JS/empresas.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link rel="stylesheet" type="text/css" href="CSS/empresas.css">
    <script src="JS/inicio.js"></script>

</head>
<body>

<?php include("header.php"); ?>

    <div class="Indice" id="Indice">
        <p id="TIndice">Índice</p>
        <ul id="Ind">
            <li><a id="#" href="#¿Por qué es importante el Big Data?">¿Por qué es importante el Big Data?</a></li>
            <li><a id="#" href="#Comofun">¿Como funciona el Big Data?</a></li>
            <li><a id="#" href="#TituTop">Top 7 empresas que utilizan el Big Data</a></li>
        </ul>
    </div>

    <div class="impBD">
        <img id="imagen" src="Recursos/Imagenes/empinicio.jpg">
        <h2 id="¿Por qué es importante el Big Data?" style="text-align: left;">¿Por qué es importante el Big Data?</h2>
        <p class="infoIMP">La importancia del Big Data radica en su capacidad para analizar patrones, tendencias y comportamientos a partir de enormes conjuntos de datos. Esto permite a las empresas y organizaciones tomar decisiones más informadas y estratégicas.</p>
    </div>
    <div class="Como">
        <p id="Comofun">¿Cómo funciona el Big Data?</p>
        <div id="vid">
            <video id="video" width="640" height="360" controls>
                <source src="Recursos/Video/El Big Data en 3 minutos.mp4" type="video/mp4">
                
            </video>
        </div>

    <div class="Top">
        <h2 id="TituTop">Top 7 empresas que utilizan el Big Data</h2>
            <p id="top7">En la era digital actual, el Big Data es fundamental para empresas de todos los tamaños y sectores. Permite comprender mejor a los clientes, mejorar la eficiencia operativa y estar a la vanguardia en la innovación y la competitividad.
                Por eso, acontinuación mencionaremos alguna empresas muy reconocidas que utilizan dicha tecnologia.<br><strong>
                <a href="javascript:popUp('https://www.nvidia.com/es-la/')">Nvidia:</a></strong> 
                Utiliza el Big Data e inteligencia artificial para mejorar la gestión de la información de las empresas. UPS: Utiliza el Big Data para rediseñar las rutas de los conductores que reparten sus paquetes. Gracias al análisis de datos, la organización ha logrado reducir en 85 millones los kilómetros recorridos y mejorar la experiencia del trabajador. 
                <br>
                
                <strong><a href="javascript:popUp('https://www.capgemini.com/')">Capgemini:</a>
                </strong> Es una consultora que utiliza el Big Data para la gestión de recursos humanos. Reconocida como Partner del año 2017 en Big Data, Capgemini es una de las empresas líderes en el sector de la transformación digital. 
                <br>
                
                <strong><a href="javascript:popUp('https://www.amazon.com/-/es/')">Amazon:</a></strong> Utiliza el Big Data y el Machine Learning para realizar análisis predictivos de compras y recomendar productos a los usuarios según sus intereses de compra. 
                <br>
                
                <strong><a href="javascript:popUp('https://www.coca-cola.com/pe/es')">Coca-Cola:</a></strong> Utiliza el Big Data para impulsar la retención de clientes y fortalecer su estrategia de datos mediante la construcción de un programa de lealtad digital.
                <br>
                
                <strong><a href="javascript:popUp('https://open.spotify.com/intl-es')">Spotify:</a></strong> Utiliza el Big Data y el Machine Learning para recomendar canciones basándose en el historial de reproducción de los usuarios y para predecir los ganadores de los premios Grammy.
                <br>
                
                <strong><a href="javascript:popUp('https://www.netflix.com/browse')">Netflix:</a></strong> Utiliza el Big Data y herramientas como Hadoop y Hive para realizar predicciones y tomar decisiones acertadas para el desarrollo de la compañía.
                <br>
                
                <strong><a href="javascript:popUp('https://www.apple.com/la/')">Apple:</a></strong> Utiliza el Big Data para conocer la forma de abordar sus nuevos productos y servicios </p><br>
            <img id="Eimagen" src="Recursos/Imagenes/Empresastop.png" width="400" width="400">
</div>
</div>

<?php include("footer.php"); ?>
</body>
</html>
