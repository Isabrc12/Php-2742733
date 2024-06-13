<?php require('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "OK";

    $Imagen =$_POST["Imagen"];
    $Titulo =$_POST["Titulo"];
    $Descripcion =$_POST["Descripcion"];
    $Estudiantes =$_POST["Estudiantes"];

    $statement = $conexion->prepare("INSERT INTO `cursos`(`imagen`, `titulo`, `descripcion`, `estudiantes`) VALUES (?,?,?,?)");
    $statement->execute(array($Imagen,$Titulo,$Descripcion,$Estudiantes));

    $_SESSION['mensaje'] = 'tarea agregada exitosamente';
    $_SESSION['color'] = 'success';

    header('Location: curso.php');

}
