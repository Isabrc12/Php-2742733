<?php

//while 
//ciclo que imprime la tabal de multiplicar del 2

$i = 1;
while ($i <= 10) {

echo "2x $i"."=".(2 * $i)."</br>";
$i++;
}

echo "</br> </br>";

//for
//imprimir los numeros del 0 al 22

for ($x = 0; $x <= 22; $x++) {
    echo "Número: $x <br>";
}

echo "</br> </br>";

//foreach
//imprimir todos productos de maquillaje menos uno

$maquillaje = array ("labial", "rubor", "pestañina", "sombras", "iluminador", "base");
foreach ($maquillaje as $x) {
    if ($x == "sombras") continue;
    echo "$x <br>";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>