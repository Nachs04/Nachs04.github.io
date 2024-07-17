<?php
date_default_timezone_set('America/Lima'); // Ajusta esto según tu zona horaria
include("con_db.php");
session_start();

if (isset($_POST['registrar'])) {
    if (strlen($_POST['cod_usuario']) >= 1 && 
        strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['correo']) >= 1 && 
        strlen($_POST['contraseña']) >= 1) {
        
        $cod = trim($_POST['cod_usuario']);
        $nom = trim($_POST['nombre']);
        $cor = trim($_POST['correo']);
        $contra = trim($_POST['contraseña']);
        $fech = date("Y-m-d"); // Obtener la fecha actual en formato YYYY-MM-DD

        $consulta = "INSERT INTO `usuario` (`cod_usuario`, `nombre`, `correo`, `contraseña`, `fecha`) 
                    VALUES ('$cod','$nom','$cor','$contra','$fech')";

        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            // Iniciar sesión automáticamente después del registro
            $_SESSION['cod_usuario'] = $cod;
            $_SESSION['nombre_usuario'] = $nom;
            header("Location: index.php");
        } else {
            echo '<h3 class="bad"> ¡Ha ocurrido un error! </h3>';
        }
    } else {
        echo '<h3 class="bad"> ¡Por favor complete los campos! </h3>';
    }
}
?>



