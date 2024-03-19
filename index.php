<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion a PHP</title>
</head>
<body>
    <?php
        $valor =$_GET["num1"];
        if ($valor == 0) {
            echo "El número ingresado Neutro";
        } elseif ($valor >= 1){
            echo "El número ingresado es Positivo";
        }else {
            echo "El número es Negativo";
        }
    ?>   
    </section>
</body>
</html>