<?php require('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    #seleccionamos el registro del curso recibido por ID
    $statement = $conexion->prepare("SELECT * FROM `cursos` WHERE id = $id");
    $statement->execute();
    $result = $statement->fetch();

    $titulo = $result['titulo'];
    $descripcion = $result['descripcion'];
    $estudiantes = $result['estudiantes'];

    echo "Titulo de la tarea " . $titulo . '<br>';
    echo "Descripcion de la tarea " . $descripcion . '<br>';

    /* $_SESSION['mensaje'] = 'Curso editado correctamente';
    $_SESSION['color'] = 'success';

    header("Location: curso.php"); */
}

if(isset ($_POST['actualizar_curso'])){
 /* echo "<h1>Formulario de actualización enviado</h1>"; */
    $id = $_GET['id'];
    $tituloActualizado = $_POST['titulo'];
    $descripcionActualizado = $_POST['descripcion'];
    $estudiantesActualizado = $_POST['estudiantes'];

    $statement = $conexion->prepare ("UPDATE `cursos` SET `titulo`= ?,`descripcion`= ?,`estudiantes`= ? WHERE id = ?");
    $statement->execute(array($tituloActualizado, $descripcionActualizado, $estudiantesActualizado, $id));

    header("Location: curso.php");



}

?>

<?php require('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="editar_curso.php?id=<?php echo $id?>" method="POST">

                <label for="titulo">Titulo</label>
                <input class="form-control" type="text" id="titulo" name="titulo" value="<?php echo  $titulo ?>" required>

                <label for="descripcion">Descripcion</label>
                <input class="form-control" type="text" id="descripcion" name="descripcion" value="<?php echo  $descripcion ?>" required>

                <label for="estudiantes">Estudiantes</label>
                <input class="form-control" type="number"  id="estudiantes" name="estudiantes" value="<?php echo  $estudiantes ?>" required>

                <br>

                <input class="btn btn-success" type="submit" id="titulo" name="actualizar_curso" value="Actualizar">

            </form>
        </div>
    </div>
</div>


<?php require('footer.php'); ?>