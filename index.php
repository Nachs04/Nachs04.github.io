<?php
session_start();

if(isset($_COOKIE['cod_usuario'])){
    echo "Usuario: ". $_COOKIE['cod_usuario'] . "esta configurado <br/>";
}

// Verifica si el usuario ha iniciado sesión
$nombre_usuario = isset($_SESSION['nombre_usuario']) ? $_SESSION['nombre_usuario'] : '';

// Incluir seguridad adicional para evitar XSS
$nombre_usuario = htmlspecialchars($nombre_usuario, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigData</title>
    <script src="JS/inicio.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
</head>
<body>
<?php include("header.php"); ?>
    <div class="Indice" id="Indice">
        <p id="TIndice">Índice</p>
        <ul id="Ind">
            <li><a href="#¿Qué es el Big Data?">¿Qué es Big Data?</a></li>
            <li><a href="#subtitulo">Características</a></li>
            <li><a href="#TBene">Beneficios</a></li>
            <li><a href="#HBD">Historia</a></li>
            <li><a href="#Estruc">Estructura</a></li>
        </ul>
    </div>
    
    <div class="infoBD">        
            <img id="imagen" src="Recursos/Imagenes/Big2.png">
            <h2 id="¿Qué es el Big Data?">¿Qué es el Big Data?</h2>
                <p class="info1">Seguro para algunos este termino es nuevo, por lo que trataremos de explicarlo de una manera sencilla. El Big Data se refiere a la gestion y anailisis de grandes cantidades de datos. Dichos datos son tan completos y numeros que una herramienta tradicional no son capaces de manejarlos de una menera eficiente.</p>
    </div>

    <div class="CaracBD">
        <h2 id="subtitulo">Caracteristicas del Big Data</h2>
            <h3 class="left">Volumen</h3>
                <p class="pright">El Big Data permite procesar gran cantidad de datos (volumen) sin cuerpo y de bajo peso. Puede tratarse de datos de valor desconocido, como los feeds de datos de Twitter, los flujos de clics de una página web o en una aplicación para móviles, o alguna información de actividad en un equipo provisto de sensores.</p>
            <h3 class="right">Velocidad</h3>
                <p class="pleft">Es el ritmo al que se reciben los datos y quizás al que se usen. Normalmente, la mayor velocidad de datos se dirigen directamente a la memoria, en vez de escribirse en un disco. Algunos artefactos inteligentes que usan internet funcionan en tiempo real y necesitan testearlo a tiempo real de manera ágil y eficaz para realizar decisiones, análisis y control.</p>                
            <h3 class="left">Variedad</h3>
                <p class="pright">Los tipos de datos comunes tenían una estructura preestablecida y podían organizarse perfectamente en una base de datos relacional. Ahora, con el Big Data, surgen nuevos tipos de datos no estructurados. Estos, como texto, audio o video, necesitan un preprocesamiento adicional para extraer significado y habilitar los metadatos.</p>
            <h3 class="right">Veracidad</h3>
                <p class="pleft">Es la confiabilidad y la calidad de los datos. Dado que el Big Data proviene de una variedad de fuentes, puede haber errores, duplicados o incluso datos maliciosamente falsificados. Es crucial garantizar la veracidad de los datos para tomar decisiones precisas y confiables.</p>
    </div>

    <div class="Beneficios">
        <h2 id="TBene">Beneficios</h2>            
            <ul id="bene">
                        <li>Mejora de la toma de decisiones</li>
                        <li>Optimización de procesos</li>
                        <li>Identificación de oportunidades de negocio</li>
                        <li>Mejora de la calidad y eficacia de los productos y servicios</li>
                    </ul>
    </div>

    <div class="Historia">
        <h2 id="HBD">Historia del Big Data</h2>
        <iframe id="Pag" src="https://www.egosbi.com/historia-del-big-data/" ></iframe>
    </div>

    <div class="Estructura">
                    <h2 id="Estruc">Estructura general de un Big Data</h2>
                        <p id="PEstruc">Todos los marcos de big data tienen características únicas que adaptan el sistema al problema que está resolviendo, pero todos comparten algunas características comunes, como se muestra en la Figura 2. La primera característica a tener en cuenta es que cada servidor opera en su propio clúster, lo que significa para tenerlo. Disco, RAM y CPU. Esto permite la creación de sistemas informáticos distribuidos y computadoras de uso general que no están diseñados para la producción en masa. Esto reduce en gran medida el costo de construcción y mantenimiento de estos sistemas de software. Todos estos servidores están conectados a través de una red local. Esta red se utiliza para comunicar los resultados de los cálculos realizados por cada servidor utilizando los datos almacenados localmente en su disco. Existen muchos tipos diferentes de redes inalámbricas, desde Ethernet hasta fibra óptica, dependiendo de la capacidad de transferir datos entre servidores.(Big Data Análisis en entornos masivos,2019)</p>
                        <img id="Eimagen" src="Recursos/Imagenes/EstruturaBigData.jpeg" width="400" width="400">
    </div>

    <?php include("footer.php"); ?>
</body >
</html>