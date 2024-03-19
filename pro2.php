<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 2</title>
</head>
<body>
    <?php
    $datos =$_GET["num2"];
    if($datos % 2 == 0){
        echo"El número ingresado es par";
    } else{
        echo "El numero ingresado es impar";
    }
    ?>

</body>
</html>