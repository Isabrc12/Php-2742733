<?php

$Edad = $_GET['Edad'];

if($Edad >=18) {
    echo "Eres mayor de edad";
} else{
    echo "Eres menor de edad";
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
    
<form action="Ejercicio1.php" method="$_GET">
<label for="Edad"></label>
<input id="Edad" type="text" placeholder="Edad del usuario..." name="Edad">
<br> <br>
<button type="submit">Enviar</button>

</form>

</body>
</html>