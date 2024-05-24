<?php



if ($_POST['user']) {

    session_start();
    $_SESSION['nombre'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];

    echo 'Puede iniciar sesión';
} else {
    echo 'Tienes que completar el formulario';
    header('Location: index.php');
}
