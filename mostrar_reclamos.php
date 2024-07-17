<?php
session_start(); // Inicia una sesión para gestionar mensajes de estado
include('conexion_db.php'); // Incluye el archivo con las credenciales de la base de datos

// Conectar a la base de datos
$con = mysqli_connect($host, $user, $pass, $db) or die("Problemas de conexión"); // Establece la conexión con la base de datos

// Eliminar reclamo
if (isset($_GET['delete'])) {
    $cod_usuario = $_GET['delete']; // Obtiene el código de usuario desde el parámetro GET
    $deleteQuery = "DELETE FROM reclamo WHERE cod_usuario = '$cod_usuario'"; // Construye la consulta SQL para eliminar el reclamo
    if (mysqli_query($con, $deleteQuery)) {
        $_SESSION['message'] = "Reclamo eliminado exitosamente."; // Establece el mensaje de éxito en la sesión
        $_SESSION['message_type'] = "success"; // Tipo de mensaje de éxito
    } else {
        $_SESSION['message'] = "Error al eliminar el reclamo: " . mysqli_error($con); // Establece el mensaje de error en la sesión
        $_SESSION['message_type'] = "error"; // Tipo de mensaje de error
    }
    header("Location: mostrar_reclamos.php"); // Redirige a la página de mostrar reclamos
    exit();
}

// Actualizar reclamo
if (isset($_POST['update'])) {
    $cod_usuario = $_POST['cod_usuario']; // Obtiene el código de usuario desde el formulario
    $correo = $_POST['correo']; // Obtiene el correo desde el formulario
    $tipo_reclamo = $_POST['tipo_reclamo']; // Obtiene el tipo de reclamo desde el formulario
    $comentario = $_POST['comentario']; // Obtiene el comentario desde el formulario

    // Construye la consulta SQL para actualizar el reclamo
    $updateQuery = "UPDATE reclamo SET correo='$correo', tipo_reclamo='$tipo_reclamo', comentario='$comentario' WHERE cod_usuario='$cod_usuario'";
    if (mysqli_query($con, $updateQuery)) {
        $_SESSION['message'] = "Reclamo actualizado exitosamente."; // Establece el mensaje de éxito en la sesión
        $_SESSION['message_type'] = "success"; // Tipo de mensaje de éxito
    } else {
        $_SESSION['message'] = "Error al actualizar el reclamo: " . mysqli_error($con); // Establece el mensaje de error en la sesión
        $_SESSION['message_type'] = "error"; // Tipo de mensaje de error
    }
    header("Location: mostrar_reclamos.php"); // Redirige a la página de mostrar reclamos
    exit();
}

// Leer reclamos
$query = "SELECT * FROM reclamo"; // Construye la consulta SQL para obtener todos los reclamos
$result = mysqli_query($con, $query); // Ejecuta la consulta y almacena los resultados
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Reclamos</title>
    <link rel="stylesheet" href="CSS/mostrar_reclamos.css"> <!-- Incluye el archivo CSS -->
    <script src="JS/mostrar_reclamos.js"></script> <!-- Incluye el archivo JavaScript -->
</head>
<body>
    <div class="form-container">
        <h1>Lista de Reclamos</h1>

        <?php
        if (isset($_SESSION['message'])) { // Comprueba si hay un mensaje en la sesión
            $message = $_SESSION['message']; // Obtiene el mensaje de la sesión
            $message_type = $_SESSION['message_type']; // Obtiene el tipo de mensaje de la sesión
            echo "<div class='message $message_type'>$message</div>"; // Muestra el mensaje
            unset($_SESSION['message']); // Elimina el mensaje de la sesión
            unset($_SESSION['message_type']); // Elimina el tipo de mensaje de la sesión
        }
        ?>

        <table>
            <thead>
                <tr>
                    <th>Código de Usuario</th>
                    <th>Correo</th>
                    <th>Tipo de Reclamo</th>
                    <th>Comentario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { // Recorre los resultados de la consulta ?>
                    <tr>
                        <td><?php echo $row['cod_usuario']; ?></td> <!-- Muestra el código de usuario -->
                        <td><?php echo $row['correo']; ?></td> <!-- Muestra el correo -->
                        <td><?php echo $row['tipo_reclamo']; ?></td> <!-- Muestra el tipo de reclamo -->
                        <td><?php echo $row['comentario']; ?></td> <!-- Muestra el comentario -->
                        <td>
                            <a href="mostrar_reclamos.php?edit=<?php echo $row['cod_usuario']; ?>">Editar</a> <!-- Enlace para editar el reclamo -->
                            <a href="mostrar_reclamos.php?delete=<?php echo $row['cod_usuario']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este reclamo?');">Eliminar</a> <!-- Enlace para eliminar el reclamo con confirmación -->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php if (isset($_GET['edit'])) { // Comprueba si hay un reclamo para editar
            $cod_usuario = $_GET['edit']; // Obtiene el código de usuario del reclamo a editar
            $editQuery = "SELECT * FROM reclamo WHERE cod_usuario = '$cod_usuario'"; // Construye la consulta SQL para obtener los datos del reclamo a editar
            $editResult = mysqli_query($con, $editQuery); // Ejecuta la consulta
            $row = mysqli_fetch_assoc($editResult); // Obtiene los datos del reclamo
        ?>
            <h2>Editar Reclamo</h2>
            <form action="mostrar_reclamos.php" method="post">
                <input type="hidden" name="cod_usuario" value="<?php echo $row['cod_usuario']; ?>"> <!-- Campo oculto con el código de usuario -->
                
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" value="<?php echo $row['correo']; ?>" required> <!-- Campo para el correo electrónico -->
                
                <label for="tipo_reclamo">Tipo de Reclamo:</label>
                <select id="tipo_reclamo" name="tipo_reclamo" required> <!-- Selección del tipo de reclamo -->
                    <option value="Bug" <?php if ($row['tipo_reclamo'] == 'Bug') echo 'selected'; ?>>Bug</option>
                    <option value="Error" <?php if ($row['tipo_reclamo'] == 'Error') echo 'selected'; ?>>Error de información</option>
                    <option value="Otros" <?php if ($row['tipo_reclamo'] == 'Otros') echo 'selected'; ?>>Otros</option>
                </select>
                
                <label for="comentario">Comentario:</label>
                <textarea id="comentario" name="comentario" rows="4" required><?php echo $row['comentario']; ?></textarea> <!-- Campo para el comentario -->
                
                <input type="submit" name="update" value="Actualizar Reclamo"> <!-- Botón para enviar el formulario -->
            </form>
        <?php } ?>
    </div>
    <button id="volverInicio">Volver a Inicio</button> <!-- Botón para volver al inicio -->
    
</body>
</html>
<?php
mysqli_close($con); // Cierra la conexión a la base de datos
?>
