<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/inicio.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <title>Document</title>
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
    <?php
    function generarNumerosAleatorios($N) {
        $numeros = array();
        for ($i = 0; $i < $N; $i++) {
            $numeros[] = rand(300, 2000);
        }
        return $numeros;
    }

    function sumarDigitos($numero) {
        $suma = 0;
        while ($numero > 0) {
            $suma += $numero % 10;
            $numero = floor($numero / 10);
        }
        return $suma;
    }

    $N = $_POST['cantidad']; // Recoge la cantidad de números a generar del formulario
    $numeros = generarNumerosAleatorios($N);

    echo "<table border='1'>";
    echo "<tr><th>Número</th><th>Suma de dígitos</th><th>Descripción</th></tr>";
    foreach ($numeros as $numero) {
        $suma = sumarDigitos($numero);
        echo "<tr><td>" . $numero . "</td><td>" . $suma . "</td><td>" . ($suma % 2 == 0 ? "Par" : "Impar") . "</td></tr>";
    }
    echo "</table>";
    ?>
    <a href="ejercicio3.php">Regresar al ejercicio</a>
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
        <p id="copy">&copy;Hecho por Nicolas Chumpitaz y Gabriel Ramos | <a id="poli" href="politicaspriv.php">Politicas de privacidad</a> <a href="https://www.instagram.com/nachs05/"><img id="img" src="Recursos/Imagenes/Ig.png"></a> <a href=""><img id="img" src="Recursos/Imagenes/Fb.png"></a> <a href=""><img id="img"src="Recursos/Imagenes/X.png"></a></p>
    </div>
</footer>
</body>
</html>
