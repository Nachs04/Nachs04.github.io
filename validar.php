<?php
session_start();

$usuario = $_POST['cod_usuario'];
$contra = $_POST['contraseña'];

include('con_db.php');

$consulta = "SELECT nombre FROM usuario WHERE cod_usuario='$usuario' AND contraseña='$contra'";
$resultado = mysqli_query($conex, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas) {
    $fila = mysqli_fetch_assoc($resultado);
    $_SESSION['cod_usuario'] = $usuario;
    $_SESSION['nombre_usuario'] = $fila['nombre'];
    header("Location: index.php");
} else {
    include("Login.php");
    echo '<h2 class="bad">Hay un error</h2>';
}

mysqli_free_result($resultado);
mysqli_close($conex);
?>

