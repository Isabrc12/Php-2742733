<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];

echo "$numero1 $numero2 $numero3 <br>";

$mayor = $numero1;

if ($numero2 > $mayor){
    $mayor = $numero2;
}
if ($numero3 > $mayor){
    $mayor = $numero3;
}

echo 'El número mayor es '. $mayor;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="Ejercicio3.php" method="post">
<label for="numero1">Número 1</label>
<input id="numero1" type="text" placeholder="Digite el primer número..." name="numero1">
<br>
<label for="numero2" required>Número 2</label>
<input id="numero2" type="text" placeholder="Digite el segundo número..." required name="numero2">
<br>
<label for="numero3" required>Número 3</label>
<input id="numero3" type="text" placeholder="Digite el tercer número..." required name="numero3">
<br>
<button type="submit">Enviar</button>

</body>
</html>