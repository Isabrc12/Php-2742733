<?php

echo 'Ejecutando condicionales...';

echo "<br/> <br/>";


/* <!-- ejercicio 1.1 --> */

$Articulos = "25";

if($Articulos <12) {
    echo "Caja normal";
} else {
    echo "Caja rapida";
}

echo "<br/> <br/>";


/* <!-- ejercicio 1.2 --> */

$Edad = "32";

if($Edad >18) {
    echo "Si puede votar";
} else {
    echo "No puede votar";
}

echo "<br/> <br/>";


/* <!-- ejercicio 2 --> */

$Nombre = "Carlos";
$Edad = "22";


if($Edad >18) {
    echo "Si puede ingresar a la discoteca";
} else {
    echo "No puede ingresar a la discoteca";
}

echo "<br/>";

if($Nombre == "Mario" xor $Nombre == "Carlos"){
    echo "Bienvenido, puedes ingresar al VIP";
}

echo "<br/> <br/>";


/* <!-- ejercicio 3 --> */

$Estatura = "175";
$Velocidad = "29";
$edad = "17";

if($Estatura > "170" && $Velocidad > "27") {
    echo "Puedes ingresar al equipo";
} else {
    echo "No puedes ingresar al equipo";
}

echo "<br/>";

if($Estatura > "170" && $Velocidad > "27"  && $edad >18) {
    echo "Pasas a divisiones mayores";
} else {
    echo "Pasas a divisiones menores";
}

echo "<br/> <br/>";

/* <!-- ejercicio 4 --> */

$calidad= "púrpura";

switch($calidad){
    case "verde";
    echo "La calidad del aire es buena";
    break;

    case "amarillo";
    echo "La calidad del aire es moderada";
    break;

    case "naranja";
    echo "La calidad del aire no es saludable para grupos sensibles";
    break;

    case "rojo";
    echo "La calidad del aire no es saludable";
    break;

    case "púrpura";
    echo "La calidad del aire es muy poco saludable";
    break;

    case "verde";
    echo "La calidad del aire es peligrosa";
    break;

    default;
    echo "el color no es válido";
    break;
}














?>