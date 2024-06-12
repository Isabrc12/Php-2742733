
<?php

require ('conexion.php');

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Cursos de Maquillaje</title>
    <link rel="stylesheet" href="curso.css">
</head>
<body>

<div class="container">
        <h2>Formulario de Registro - Cursos de Maquillaje</h2>
        <form action="agregar_curso.php" method="post">
            <label for="Imagen">Imagen...</label>
            <input type="file" id="Imagen" name="Imagen" required>

            <label for="Curso">Curso...</label>
            <input type="text" id="Curso" name="Curso" required>

            <label for="Descripcion">Descripcion...</label>
            <input type="text" id="Descripcion" name="Descripcion" required>

            <label for="Estudiantes">Estudiantes...</label>
            <input type="text" id="Estudiantes" name="Estudiantes" required>

            <button type="submit">Registrarse</button>
        </form>
    </div>


    <h2>Tabla de Cursos de Maquillaje</h2>
    <table>
        <thead>
            <tr>
                <th>Curso</th>
                <th>Duración</th>
                <th>Precio</th>
                <th>Instructor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Maquillaje Básico</td>
                <td>4 semanas</td>
                <td>$100</td>
                <td>Laura González</td>
            </tr>
            <tr>
                <td>Maquillaje Profesional</td>
                <td>8 semanas</td>
                <td>$200</td>
                <td>Maria Pérez</td>
            </tr>
            <tr>
                <td>Maquillaje Artístico</td>
                <td>6 semanas</td>
                <td>$150</td>
                <td>Pedro Sánchez</td>
            </tr>
            <tr>
                <td>Maquillaje para Novias</td>
                <td>5 semanas</td>
                <td>$120</td>
                <td>Ana López</td>
            </tr>
        </tbody>
    </table>

</body>
</html>