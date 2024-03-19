<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 4</title>
</head>
<body>
<?php
    $datos = $_POST["palabra2"];
    $datoss = $_POST["palabra02"];
    if (strncmp($datos,$datoss, 1)===0){
        echo"Los textos inician con la misma letra";
    } else {
        echo"Los textos no inician con la misma letra";
    }
?>
</body>

</html>