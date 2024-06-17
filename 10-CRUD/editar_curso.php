<?php require('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    #seleccionamos el registro del curso recibido por ID
    $statement = $conexion->prepare("SELECT * FROM `cursos` WHERE id = $id");
    $statement->execute();
    $result = $statement->fetch();

    $titulo = $result['titulo'];
    $descripcion = $result['descripcion'];

    echo "Titulo de la tarea " . $titulo . '<br>';
    echo "Descripcion de la tarea " . $descripcion . '<br>';

    /* $_SESSION['mensaje'] = 'Curso editado correctamente';
    $_SESSION['color'] = 'success';

    header("Location: curso.php"); */
}
?>

<?php require('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="editar_curso.php" method="POST">

                <label for="titulo">Titulo</label>
                <input class="form-control" type="text" id="titulo" name="titulo" value="<?php echo  $titulo ?>" required>

                <label for="descripcion">Descripcion</label>
                <input class="form-control" type="text" id="descripcion" name="descripcion" value="<?php echo  $descripcion ?>" required>

                <input class="btn btn-success" type="submit" id="titulo" name="actualizar_curso" value="Actualizar">

            </form>
        </div>
    </div>
</div>


<?php require('footer.php'); ?>