<?php

$metros = $_POST['metros'];
$muro = $_POST['muro'];

if ($muro == 'liso'){
    echo 'El valor es '. ($metros * 2000 + 15000);
} else {
    echo 'El valor es '. ($metros * 4000 + 15000);
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
    
<form action="Ejercicio4.php" method="post">
<label for="metros">Metros</label>
<input id="metros" type="text" placeholder="Digite los metros a pintar..." name="metros">
<br>
<label for="muro" required>Muro</label>
<input id="muro" type="text" placeholder="Escriba liso o no liso..." required name="muro">
<br>
<button type="submit">Enviar</button>

</body>
</html>