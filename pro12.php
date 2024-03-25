<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 10</title>
</head>
<body>
<?php
   $numero=$_POST["num9"];
   $numero1=$_POST["num09"];
   if($numero === $numero1){
       echo "Ingrese un número mayor en valor final";
   } elseif ($numero < $numero1){
       for ($i= $numero; $i <= $numero1 ; $i+=5) { 
           echo $i . "<br>";
       } }else {
       for ($i=$numero1; $i <= $numero ; $i+=5) { 
           echo $i." <br>";
       }
       }
   ?>
</body>
</html>