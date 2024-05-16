<?php

$horas = $_POST['horas'];
$valor = $_POST['valor'];
$resultado = $horas * $valor;

echo "Su salario mensual es de $resultado". "</br>";
if ($resultado >=2200000) {
    echo "Se le retiene fuente";
} else {
    echo "No se le retiene fuente";
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
    
<form action="Ejercicio2.php" method="post">
<label for="horas">Horas</label>
<input id="horas" type="text" placeholder="Digite las horas..." name="horas">
<br>
<label for="valor" required>Valor</label>
<input id="valor" type="text" placeholder="Digite el valor de las horas..." required name="valor">
<br>
<button type="submit">Enviar</button>

</form>

</body>
</html>