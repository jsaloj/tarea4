<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 10</title>
</head>
<body>
<?php
    $numero = $_POST["num10"];
    echo "<table border='1'";
    echo "<table padding: 0";
    for ($i = 1; $i <= $numero; $i++) {
        $color = ($i % 2 == 0) ? 'blue' : 'green';
        echo "<tr style='background-color: $color;'>";
        for ($j = 1; $j <= 3; $j++) {
            echo "<td>filas $i, Columnas $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>