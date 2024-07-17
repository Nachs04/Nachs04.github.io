<?php
include("con_db.php");

if (isset($_POST['actualizar'])) {
    $id = mysqli_real_escape_string($conex, $_POST['id']);
    $nombre = mysqli_real_escape_string($conex, $_POST['nombre']);
    $correo = mysqli_real_escape_string($conex, $_POST['correo']);
    $contrasena = mysqli_real_escape_string($conex, $_POST['contrasena']);

    // Consulta SQL para actualizar los datos del usuario
    $consulta = "UPDATE usuario SET nombre='$nombre', correo='$correo', contrasena='$contrasena' WHERE cod_usuario='$id'";

    if (mysqli_query($conex, $consulta)) {
        echo '<p>Usuario actualizado correctamente.</p>';
        echo '<p><a href="index.php">Volver</a></p>';
    } else {
        echo '<p>Error al actualizar el usuario: ' . mysqli_error($conex) . '</p>';
    }
}

mysqli_close($conex);
?>
