<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 5</title>
</head>
<body>
    <?php
    $valor1=$_POST["num5"];
    $valor2=$_POST["num05"];
    $valor3=$_POST["num005"];
    if ($valor1>$valor2 and $valor2> $valor3){
        echo "El número mayor es: $valor1";
    } else if ($valor2> $valor1 and $valor1 > $valor3){
        echo "El número mayor es: $valor2";
    } else{
        Echo "El numero mayor es: $valor3";
    }
    ?>
</body>
</html>