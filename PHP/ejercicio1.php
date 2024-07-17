<!DOCTYPE html>
<html>
<head>
    <title>Libro de Reclamaciones</title>
    <link rel="stylesheet" type="text/css" href="CSS/Ejercicios.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="CSS/Registro.css">
</head>
<body>
<div class="formulario">
<h1>Libro de Reclamaciones</h1>
    <form action="reclamo.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="reclamo">Reclamo:</label><br>
        <textarea id="reclamo" name="reclamo"></textarea><br>
        <input type="submit" value="Enviar">
    </form>

</div>
    
</body>
</html>
