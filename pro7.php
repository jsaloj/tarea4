<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 7</title>
</head>
<body>
    <?php
    $texto1=$_POST["palabra4"];
    $texto2=$_POST["palabra04"];
    $texto3=$_POST["palabra004"];
    $comparar1 = substr($texto1,-1);
    $comparar2 = substr($texto2,-1);
    $comparar3 = substr($texto3,-1);
        if ($comparar1 === $comparar2 and $comparar2 === $comparar3){
            echo "Las ultimas letras son iguales de los 3 textos";
        } else{
            echo "Las ultimas letras son diferentes de los 3 textos";
        }
    ?>
</body>
</html>