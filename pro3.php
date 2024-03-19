<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 3</title>
</head>
<body>
    <?php
    $valor = $_POST["palabra1"];
    $datos = $_POST["num3"];
    $valor_exportado=(strlen($valor));
    if ($valor_exportado == $datos){
        echo"La longitud de la palabra es igual al Numero ingresado";
    } else {
        echo "La longitud de la palabra no es igual al numero ingresado";
    }
    ?>
</body>
</html>