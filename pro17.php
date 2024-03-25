<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 16</title>
</head>
<body>
<?php
        function maximo($numero1, $numero2){
            while ($numero1 % $numero2>0) {
                $auxiliar=$numero1;
                $numero1=$numero2;
                $numero2=$auxiliar%$numero2;
            }
            return $numero2;
        }
    $numer1 = $_POST["num1"];
    $numer2 = $_POST["num2"];
    $auxiliar =0;
    echo "El Maximo Comun Divisor de los números $numer1, $numer2 es: <br>";
    echo maximo($numer1, $numer2);
?>
</body>
</html>