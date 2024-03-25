<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 6</title>
</head>
<body>
    <?php
    $datos=$_POST["palabra3"];
    $datoss="s";
    $letra=strpbrk(strtolower($datos), $datoss);
    if ($letra === false){
        echo"No hay letra' $datoss' en la palabra '$datos'";
    }else{
        echo "La palabra ' $datos' tiene la letra '$datoss'";
    }
    ?>
</body>
</html>