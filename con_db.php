<?php
    // Establecer la conexión con la base de datos
    $conex = mysqli_connect("localhost", "root", "", "proyecto");

    // Verificar si la conexión fue exitosa
    if (!$conex) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
?>
