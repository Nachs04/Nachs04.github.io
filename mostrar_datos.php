<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="CSS/entregable5.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>

        <div class="search-container">
            <form method="GET" action="">
                <label for="search">Buscar por nombre:</label>
                <input type="text" id="search" name="nombre">
                <input type="submit" value="Buscar">
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("con_db.php");

                // Verificar si se ha enviado un formulario de actualización
                if (isset($_POST['submit'])) {
                    $cod = mysqli_real_escape_string($conex, $_POST['cod']);
                    $nombre = mysqli_real_escape_string($conex, $_POST['nombre']);
                    $correo = mysqli_real_escape_string($conex, $_POST['correo']);
                    $contraseña = mysqli_real_escape_string($conex, $_POST['contraseña']);

                    // Consulta para actualizar el usuario
                    $sql_update = "UPDATE usuario SET nombre='$nombre', correo='$correo', contraseña='$contraseña' WHERE cod_usuario='$cod'";
                    $resultado_update = mysqli_query($conex, $sql_update);

                    if ($resultado_update) {
                        echo "<p>Usuario actualizado correctamente.</p>";
                    } else {
                        echo "<p>Error al actualizar usuario: " . mysqli_error($conex) . "</p>";
                    }
                }

                // Consulta inicial para mostrar todos los usuarios o filtrar por nombre
                $consulta = "SELECT * FROM usuario";

                if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
                    $nombre = mysqli_real_escape_string($conex, $_GET['nombre']);
                    $consulta = "SELECT * FROM usuario WHERE nombre LIKE '%$nombre%'";
                }

                $resultado = mysqli_query($conex, $consulta);

                if (!$resultado) {
                    die("Query failed: " . mysqli_error($conex));
                }

                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>
                            <form method="post" action="">
                                <input type="hidden" name="cod" value="' . htmlspecialchars($fila['cod_usuario']) . '">
                                <td>' . htmlspecialchars($fila['cod_usuario']) . '</td>
                                <td><input type="text" name="nombre" value="' . htmlspecialchars($fila['nombre']) . '"></td>
                                <td><input type="text" name="correo" value="' . htmlspecialchars($fila['correo']) . '"></td>
                                <td><input type="text" name="contraseña" value="' . htmlspecialchars($fila['contraseña']) . '"></td>
                                <td>
                                    <input class="btn-actualizar" type="submit" name="submit" value="Actualizar">
                                    <a href="eliminar_proceso.php?id=' . htmlspecialchars($fila['cod_usuario']) . '" class="btn-delete" onclick="return confirm(\'¿Está seguro que desea eliminar este usuario?\')">Eliminar</a>
                                </td>
                            </form>
                        </tr>';
                }

                mysqli_free_result($resultado);
                mysqli_close($conex);
                ?>
            </tbody>
        </table><br>
        <form method="GET" action="">
            <input type="submit" class="btn-update" name="mostrar_todo" value="Mostrar Todos los Usuarios">
        </form><br>
        <a href="index.php" class="btn-update">Volver</a>

    </div>
</body>
</html>


