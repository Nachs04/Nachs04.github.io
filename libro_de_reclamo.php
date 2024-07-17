<?php
if (isset($_POST['Enviar Reclamo'])) {
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamo</title>
    <link rel="stylesheet" href="CSS/libro.css">
    <script src="JS/libro.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="formulario">
        <h1>Libro de Reclamo</h1>

        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            $message_type = $_SESSION['message_type'];
            echo "<div class='message $message_type'>$message</div>";
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        }
        ?>
        <form action="https://formsubmit.co/nicolaschumpitazsac@gmail.com" method="post">
        <form action="Enviar_Reclamo.php" method="post" name="form">
            <label for="cod_usuario">Código de Usuario:</label>
            <input type="text" id="cod_usuario" name="cod_usuario" required>
            
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            
            <label for="tipo_reclamo">Tipo de Reclamo:</label>
            <select id="tipo_reclamo" name="tipo_reclamo" required>
                <option value="">Seleccionar tipo</option>
                <option value="Bug">Bug</option>
                <option value="Error">Error de información</option>
                <option value="Otros">Otros</option>
            </select>
            
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4" required></textarea>
            
            <input type="checkbox" id="terminos_condiciones" name="terminos_condiciones" required>
            <label for="terminos_condiciones" class="terms">Acepto los términos y condiciones</label>   
            <div class="mb-3">
                <div class="g-recaptcha" data-sitekey="6LdflA8qAAAAAFB3kK82a1thg_8PLo_X3TBb6lAJ"></div>
            </div>         
            <input type="submit" value="Enviar Reclamo" name="Enviar">
        </form>
        </form>
        <button id="volverInicio">Volver a Inicio</button>
    </div>
</body>
</html>

