<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de MCD y MCM</title>
    <script src="JS/inicio.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link rel="stylesheet" type="text/css" href="CSS/Ejercicios.css">
    <link rel="stylesheet" type="text/css" href="CSS/diseñoejercicio.css">
</head>
<body>
<header class="header">
<div class="Contenedor">
            <a href="index.php"><img id="logo" src="Recursos/Imagenes/Big1.png" alt="Logo"></a>
            <ul id="opciones">
                <li><a href="noticias.php">Últimas noticias</a></li>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="empresas.php">Importancia del Big Data</a></li>
                <li><a href="Entregable3.php">Entregable 3</a></li>
                <li><a href="Entregable4.php">Entregable 4</a></li>
            </ul>
            <span id="user-name"><?php echo $nombre_usuario; ?></span>
            <?php if (empty($nombre_usuario)): ?>
                <a class="login" href="login.php">Iniciar Sesión</a>
            <?php else: ?>
                <a class="logout" href="logout.php">Cerrar Sesión</a>
            <?php endif; ?>
        </div>
    </header>

    <div class="diseño">
    <h2>El MCD y MCM de tres números enteros</h2>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validarFormulario2();">
        <label for="num1">Ingrese el primer número:</label><br>
        <input type="number" id="num1" name="num1"><br><br>
        <label for="num2">Ingrese el segundo número:</label><br>
        <input type="number" id="num2" name="num2"><br><br>
        <label for="num3">Ingrese el tercer número:</label><br>
        <input type="number" id="num3" name="num3"><br><br>
        <input type="submit" value="Calcular">
    </form>
</div>



    <?php

    // Función para calcular el MCD de dos números
    function mcd($a, $b) {
        while ($b != 0) {
            $temp = $b;//a 7 b 3--a 3  b1
            $b = $a % $b;//1--0
            $a = $temp;//3--1
        }
        return $a;//3 1
    }

    // Función para calcular el MCM de dos números utilizando el MCD
    function mcm($a, $b) {
        return ($a * $b) / mcd($a, $b);
    }

    // Función para calcular el MCD y el MCM, aqui le añadimo uno más para que sea de tres numeros
    function mcd_mcm_tres_numeros($num1, $num2, $num3) {
        $mcd_num1_num2 = mcd($num1, $num2);
        $mcm_num1_num2 = mcm($num1, $num2);
        $mcd_tres_numeros = mcd($mcd_num1_num2, $num3);
        $mcm_tres_numeros = mcm($mcm_num1_num2, $num3);
        return array('mcd' => $mcd_tres_numeros, 'mcm' => $mcm_tres_numeros);
    }

    // Verificar si se enviaron datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los números ingresados por el usuario
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // esto es para que lo que ponga el usuario sea correcto sino envia un error
        if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
            // Calcular el MCD y el MCM
            $resultados = mcd_mcm_tres_numeros($num1, $num2, $num3);
            $mcd = $resultados['mcd'];
            $mcm = $resultados['mcm'];
            echo "<h3>Resultados:</h3>";
            echo "El MCD de $num1, $num2 y $num3 es: $mcd<br>";
            echo "El MCM de $num1, $num2 y $num3 es: $mcm<br>";
        } else {
            echo "<p>Por favor, ingrese números válidos.</p>";
        }
    }
    ?>
    <a href="ejercicio3.php">Anterior ejercicio</a> 
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

