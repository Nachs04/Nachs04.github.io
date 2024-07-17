<!DOCTYPE html>
<html>
<head>
    <title>Simulador de Pago Mensual</title>
    <script src="JS/Ejercicios2.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
    <link rel="stylesheet" type="text/css" href="CSS/Ejercicios.css">
    <link rel="stylesheet" type="text/css" href="CSS/diseñoejercicio.css">
</head>
<body>
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
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
    
    <div class="diseño">
    <h2>Realizamos calculo de la cuota mensual de una deuda</h2>
    <div class="diseño">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validarFormulario()">
        <label for="monto">Monto de la compra:</label><br>
        <input type="number" id="monto" name="monto" step="0.01"><br><br>
        <label for="tarjeta">Tipo de tarjeta:</label><br>
        <select id="tarjeta" name="tarjeta">
            <option value="Visa">Visa</option>
            <option value="MasterCard">MasterCard</option>
            <option value="American Express">American Express</option>
        </select><br><br>
        <label for="meses">Cantidad de meses a fraccionar:</label><br>
        <input type="number" id="meses" name="meses"><br><br>
        <input type="submit" value="Calcular">
    </form>

    </div>
    


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $monto = $_POST['monto'];
        $tarjeta = $_POST['tarjeta'];
        $meses = $_POST['meses'];

        // aqui Calcularemos interés según el tipo de tarjeta
        switch ($tarjeta) {
            case 'Visa':
                $interes = 0.03;
                break;
            case 'MasterCard':
                $interes = 0.035;
                break;
            case 'American Express':
                $interes = 0.04;
                break;
            default:
                $interes = 0;
        }

        // Calculamos lo que se tiene que pagar mensualmente y lo mostramos en la tabla
        $cuota = $monto * ($interes / (1 - pow(1 + $interes, -$meses)));
        $deuda = $monto;

        echo "<h3>Tabla de Amortización:</h3>";
        echo "<table>";
        echo "<tr><th>Mes</th><th>Cuota mensual</th><th>Pago del interés</th><th>Pago del capital</th><th>Deuda</th></tr>";
        for ($i = 1; $i <= $meses; $i++) {
            $interes_pago = $deuda * $interes;
            $capital_pago = $cuota - $interes_pago;
            $deuda -= $capital_pago;

            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>" . number_format($cuota, 2) . "</td>";
            echo "<td>" . number_format($interes_pago, 2) . "</td>";
            echo "<td>" . number_format($capital_pago, 2) . "</td>";
            echo "<td>" . number_format($deuda, 2) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
    </div>
    <?php
date_default_timezone_set('America/Lima'); // Ajusta esto según tu zona horaria
echo "Fecha y hora del servidor: " . date("Y-m-d H:i:s");
?>
    
    <a href="Entregable4.php">Anterior ejercicio</a> 
    <br>
    <a href="ejercicio3.php">Siguiente ejercicio</a> 
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
