<!DOCTYPE html>
<html>
<head>
    <title>Generar Números Aleatorios</title>
    <script src="JS/inicio.js"></script>
    <script src="JS/Ejercicios2.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/ejercicio.css">
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link rel="stylesheet" type="text/css" href="CSS/Ejercicios.css">
    <link rel="stylesheet" href="CSS/Registro.css">
</head>
<body>
<header class="header">
        <div class="Contenedor">
            <a href="index.html"><img id="logo" src="Recursos/Imagenes/Big1.png" alt="Logo"></a>
            <ul id="opciones">
                
                <li><a onclick="salida()">Ultimas noticias</a></li>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="empresas.php">Importancia del Big Data</a></li>
                <li><a href="Entregable3.php">Entregable 3</a></li>
                <li><a href="Entregable4.php">Entregable 4</a></li>
            </ul>
            <a class="login" href="Login.php">Iniciar Sesion</a>
            <button class="botonMenu"><img src="Recursos/menu.png" alt="Menu"></button>
        </div>
    </header>

    <div class="formulario">
    <h1>Generar Números Aleatorios</h1>
    
    <form action="numeros.php" method="post" onsubmit="return validar()">
        <label for="cantidad">Cantidad de números a generar:</label><br>
        <input type="number" id="cantidad" name="cantidad" min="1"><br>
        <input type="submit" value="Generar">
    </form>
    </div>
   
    <a href="ejercicio2.php">Anterior ejercicio</a> 
    <br>
    <a href="ejercicio4.php">Siguiente ejercicio</a> 
    
    <footer>
    <div class="Novedades"> 
            <p id="CNov">Novedades</p> 
                <ul id="Nov">
                    <li>Ofertas especiales de esta semana.</li>
                    <li>Nuevos productos disponibles.</li>
                    <li>Evento de lanzamiento próximo viernes.</li>
                    <li>¡Sigue nuestras redes sociales!</li>
                </ul>
    </div>

    <div class ="Contactos">
        <h3 id="CCon">Contactos</h3> 
                <ul id="Con">
                    <li>cel:912823976</li>
                    <li>Email:lospro@gmail.com</li>
                </ul>  
    </div>
    <div class="priv">
        <p id="copy">&copy;Hecho por Nicolas Chumpitaz y Gabriel Ramos | <a id="poli" href="politicaspriv.html">Politicas de privacidad</a> <a href="https://www.instagram.com/nachs05/"><img id="img" src="Recursos/Imagenes/Ig.png"></a> <a href=""><img id="img" src="Recursos/Imagenes/Fb.png"></a> <a href=""><img id="img"src="Recursos/Imagenes/X.png"></a></p>
    </div>
</footer>
</body>
</html>
