<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Programa Menor o Mayor</title>
</head>
<body>
    <?php
    $edad = $_POST['edad'];
    if ($edad < 18) {
        echo $edad." Es Menor de EDAD";
    }else{
        echo $edad." Es Mayor de EDAD";
    }
    ?>
</body>
</html>