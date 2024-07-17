<?php
session_start(); // Iniciar sesión

// Incluir archivo de conexión a la base de datos
include('conexion_db.php');

if (isset($_POST['cod_usuario']) && !empty($_POST['cod_usuario']) && 
    isset($_POST['correo']) && !empty($_POST['correo']) &&
    isset($_POST['tipo_reclamo']) && !empty($_POST['tipo_reclamo']) && 
    isset($_POST['comentario']) && !empty($_POST['comentario'])) {

    $con = mysqli_connect($host, $user, $pass, $db) or die("Problemas de conexión");

    $cod_usuario = $_POST['cod_usuario'];
    $correo = $_POST['correo'];

    // Verificar si cod_usuario y correo existen en la tabla usuario
    $query_verificacion = "SELECT * FROM usuario WHERE cod_usuario = '$cod_usuario' AND correo = '$correo'";
    $result_verificacion = mysqli_query($con, $query_verificacion);

    if (mysqli_num_rows($result_verificacion) > 0) {
        // Insertar el reclamo si se encuentran coincidencias
        $query = "INSERT INTO reclamo (cod_usuario, correo, tipo_reclamo, comentario) VALUES ('$cod_usuario', '$correo', '$_POST[tipo_reclamo]', '$_POST[comentario]')";

        if (mysqli_query($con, $query)) {
            $_SESSION['message'] = "Reclamo enviado exitosamente";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Error al enviar el reclamo: " . mysqli_error($con);
            $_SESSION['message_type'] = "error";
        }
    } else {
        $_SESSION['message'] = "El código de usuario y/o el correo no coincididen.";
        $_SESSION['message_type'] = "error";
    }

    // Cerrar la conexión
    mysqli_close($con);

    // Redirigir a libro_de_reclamo.php
    header("Location: libro_de_reclamo.php");
    exit();
} else {
    $_SESSION['message'] = "Todos los campos son obligatorios.";
    $_SESSION['message_type'] = "error";

    // Redirigir a libro_de_reclamo.php
    header("Location: libro_de_reclamo.php");
    exit();
}
?>

