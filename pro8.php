<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 8</title>
</head>
<body>
    <?php
    $valor1=$_POST["palabra5"];
    $valor2=$_POST["palabra05"];
    $valor3=$_POST["palabra005"];
    $valor4=$_POST["palabra15"];
    $valor5=$_POST["palabra015"];
    $texto1=strlen($valor1);
    $texto2=strlen($valor2);
    $texto3=strlen($valor3);
    $texto4=strlen($valor4);
    $texto5=strlen($valor5);
    $suma=(($texto1 + $texto2 + $texto3 + $texto4 + $texto5)/5)-1;
    $unidos= $valor1.$valor2.$valor3.$valor4.$valor5;
    $posicion = substr($unidos,$suma,1);
    echo "$unidos <br>";
    echo "$suma <br>";
    echo"$posicion <br>";
    if ($posicion ==="a" or $posicion ==="e" or $posicion ==="i" or $posicion === "o" or $posicion === "u"){
        echo " La letra es un vocal";
    } else{
            echo " La letra es un consonante";
        }
    ?>
</body>
</html>