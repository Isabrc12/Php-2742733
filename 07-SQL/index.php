<?php

//Documentación: SQL 

//1. SQL SELECT
//SELECT Nombre, Edad FROM profesores;
//Selecciona todos los regristros de nombre y edad dentro de la tabla profesores

//2. SQL SELECT DISTINCT
//SELECT DISTINCT Grado FROM estudiantes;
//Selecciona solo un grado y los demás que están repetidos los elimina

//3. SQL WHERE
//SELECT * FROM profesores WHERE nombre='Oliver';
//Selecciona en la tabla de profesores solo los datos del que se llama Oliver

//4. SQL ORDER BY
//SELECT * FROM profesores ORDER BY Materia;
//Ordena de manera ascendente las materias de cada profesor

//5. SQL AND
//SELECT * FROM profesores WHERE `Estado civil` = 'Casado' AND Nombre LIKE 'O%';
//Selecciona en la tabla de profesores los que son casados y que su nombre comienza con la letra O.

//6. SQL OR
//SELECT * FROM estudiantes WHERE `Media técnica` = 'Dibujo' OR `Media técnica` = 'Sistemas';
//Selecciona en la tabla de estudiantes los estudaintes que son de las medias tecnicas dibujo y sistemas.

//7. SQL NOT
//SELECT * FROM estudiantes WHERE NOT Grado = '10';
//Elimina los estudiantes que están en 10 y solo selecciona y muestra los estudiantes de 11.

//8. SQL INSERT INTO
//INSERT INTO estudiantes (Nombre, Edad, Grado, `Media técnica`, Documento) VALUES ('Isabel', '18', '11', 'Multimedia', '8532165');
//Inserta una nueva fila con datos de una estudiante que no estaba registrada antes.

//9. NULL VALUES
//SELECT `Grado` FROM estudiantes WHERE `Grado` IS NOT NULL;
//El grado no es un valor no vacio.

//10. SQL UPDATE
//UPDATE estudiantes SET Nombre = 'Alejandra', Edad= '18' WHERE ID = 6;
//Actualiza algún dato ya existente, como el numero de ID de Alejandra

//11.SQL DELETE
//DELETE FROM profesores WHERE Edad='65';
//Elimina los datos de la persona que cumple con la edad mencionada.

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