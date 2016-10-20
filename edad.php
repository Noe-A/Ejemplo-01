<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Enviar EDAD</title>
</head>
<body>
    <form action="menor.php" method="POST">
        <p>Escribe tu EDAD:</p>
        <input type="text" name="edad" required pattern="[0-9]{1,2}">
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>