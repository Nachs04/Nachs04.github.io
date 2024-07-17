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
    <title>Entregable3</title>
    <script src="JS/Ejercicios.js"></script>
    <script src="JS/inicio.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link rel="stylesheet" type="text/css" href="CSS/diseñoejercicio.css">

</head>
    <body>
    <?php include("header.php"); ?>

    <div class="diseño">
        <h2>Ejercicio 1</h2>
            <img id="imagen" src="Recursos/Imagenes/EjerciciosImagenes/imagen.jpg" alt="img" width="350" height="350">
            <div id="descripcion">Este es un gato en una PC :)</div>
    </div>
        

    <br>
    <br><br><br>

    <div class="diseño">
        <h2>Ejercicio 2</h2>
        <h2>Conversión de Base</h2>
        <label for="base">Introduce la base (menor o igual a 10):</label><br>
        <input class="campo" type="number" id="base" name="base" min="2" max="10"><br>
        <label for="numero">Introduce el número en la base dada:</label><br>
        <input class="campo" type="text" id="numero" name="numero"><br>
        <button onclick="convertir()">Convertir a Base 10</button>
        <p id="resultado"></p>

    </div>
        
    <br>
    <br><br><br>
    
    <div class="diseño">

        <h2>Ejercicio 3</h2>
        <label for="numeros">Ingresa un número:</label><br>
        <input class="campo"  type="number" id="numeros" name="numeros"><br>
        
        <br>
        
        <label for="letra">Ingresa una letra:</label><br>
        <input class="campo" type="text" id="letra" name="letra"><br><br>
        <button onclick="escribirNumero()">Haz clic aquí</button>
    
        <p id="miParrafo"> </p>


    </div>
    <br>
    <br><br><br>


    <div class="diseño">
        <h2>Ejercicio 4</h2>
    <h3>Ingresa tu fecha de nacimiento</h3>
    <input class="campo" type="date" id="fechaNacimiento">
    <button onclick="obtenerSignoZodiacal()">Obtener Signo Zodiacal</button>
    <p id="signoZodiacal"></p>
    <img id="imagenZodiacal" src="">
    <p id="descripcionZodiacal"></p>
    </div> 
    
    <br>
    <br><br><br>


    <div class="diseño">
            <h2>Ejercicio 5</h2>
            <h3>Ingrese el número de empleado:</h3>
            <input type="number" id="numeroEmpleado" min="1000" max="4999">
            <button onclick="desempaquetarInformacion()">Enviar</button>
            <p id="result"></p>
    </div>


    <?php include("footer.php"); ?>
</body>
</html>