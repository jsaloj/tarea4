<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 10</title>
</head>
<body>
    <?php
     $numero=$_POST["num1"];
     $contador=0; 
     $resultado=0;
         for ($i= 1; $i <= $numero ; $i++) { 
             if ($numero % $i=== 0){
             $contador++;}
         }
         if ($contador=== 2) {
           echo "El número ingresado es un número Primo";
        }else{
            echo "El número no es numero Primo";
        }
     ?>
</body>
</html>