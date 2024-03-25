<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 10</title>
</head>
<body>
    <?php
    $numero=$_POST["palabra16"];
    for ($i=0; $i < strlen("$numero") ; $i++) { 
        echo $numero[$i]."<br>";
    }
    ?>
</body>
</html>