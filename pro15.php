<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 10</title>
</head>
<body>
<?php
    $palabra = $_POST["palabra16"];
    $contadora = 0;
    $contadore = 0;
    $contadori = 0;
    $contadoro = 0;
    $contadoru = 0;

    for ($i = 0; $i < strlen($palabra); $i++) { 
        $letra = strtolower($palabra[$i]); 
        if ($letra === "a") {
            $contadora++;
        } elseif ($letra === "e") {
            $contadore++;
        } elseif ($letra === "i") {
            $contadori++;
        } elseif ($letra === "o") {
            $contadoro++;
        } elseif ($letra === "u") {
            $contadoru++;
        }
    }
?>
<?php
echo "El texto '$palabra' posee las siguientes vocales:";
?>
<table border="1">
    <tr>
        <th>Vocales</th>
        <th>Cantidad</th>
    </tr>
    <tr>
        <td>A, a</td>
        <td><?php echo $contadora; ?></td>
    </tr>
    <tr>
        <td>E, e</td>
        <td><?php echo $contadore; ?></td>
    </tr>
    <tr>
        <td>I, i</td>
        <td><?php echo $contadori; ?></td>
    </tr>
    <tr>
        <td>O, o</td>
        <td><?php echo $contadoro; ?></td>
    </tr>
    <tr>
        <td>U, u</td>
        <td><?php echo $contadoru; ?></td>
    </tr>
</table>
</body>
</html>