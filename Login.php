<?php
if (isset($_POST['Ingresar'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $secretkey = "6LdflA8qAAAAAIoB-MHIbOLxMlnYsos_xdm9hpIv"; // Add your secret key here

    // Ensure the URL is correctly formed
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip";
    $respuesta = file_get_contents($url);
    
    if ($respuesta === FALSE) {
        die('Error en la verificacion de reCAPTCHA');
    }

    $atributos = json_decode($respuesta, TRUE);

    $errors = array(); 
    
    if (!$atributos['success']) {
        $errors[] = 'Error en el CAPTCHA';
    } else {

    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <script src="JS/inicio.js"></script>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="CSS/Registro.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <header class="header">
        <div class="Contenedor">
            <a href="index.php"><img id="logo" src="Recursos/Imagenes/Big1.png" alt="Logo"></a>
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
        <h2>Inicio de sesion</h2>
        <form action="validar.php" method="post">
            <div class="usuario">
                <p>Nombre de usuario:</p>
                <input type="text"name="cod_usuario" placeholder="Nombre">
            </div>
            <div class="Contrasena">
                <p>Contraseña:</p>
                <input type="password" name="contraseña" placeholder="Contraseña">
            </div>
            <div class="recordar">¿Olvidaste tu contraseña?</div>
            <div class="mb-3">
                <div class="g-recaptcha" data-sitekey="6LdflA8qAAAAAFB3kK82a1thg_8PLo_X3TBb6lAJ"></div>
            </div>
            <input type="submit" value="Ingresar" name="Ingresar">
            <div class="registrar">
                ¿Aún no tienes cuenta? Regístrate <a href="CrearUsuario.php">aquí</a>
            </div>
        </form>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>