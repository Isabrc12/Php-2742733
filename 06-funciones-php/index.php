<?php

//leer: funciones PHP en w3School
echo "ejecutando.php";

//crear una funcion que me diga si una persona es mayor o menor de edad

function validarEdad($edad){
    if($edad >=18){
        echo "<br> mayor de edad";
    }else {
        echo "<br> menor de edad";
    }
}

//Llamado de la función
validarEdad( isset ($_POST ['edad']) ? $_POST ['edad']: null);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones php</title>
</head>
<body style="background-color: #232323; color: white;">
    
<form action=<?php echo $_SERVER["PHP_SELF"] ?> method="POST">
    <label for="edad">Edad</label>
    <input type="number" name="edad" id="edad">
    <button type="submit">Validar edad</button>
</form>
<h1>Funciones php 🤖</h1>


</body>
</html>