<?php
include("con_db.php");

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conex, $_GET['id']);

    // Consulta SQL para eliminar el usuario
    $consulta = "DELETE FROM usuario WHERE cod_usuario='$id'";

    if (mysqli_query($conex, $consulta)) {
        echo '<p>Usuario eliminado correctamente.</p>';
        echo '<p><a href="index.php">Volver</a></p>';
    } else {
        echo '<p>Error al eliminar el usuario: ' . mysqli_error($conex) . '</p>';
    }
}

mysqli_close($conex);
?>
