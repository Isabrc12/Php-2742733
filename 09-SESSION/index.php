<?php session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
    $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;

    //Para verificar que se envíen todos los datos
    if (empty($usuario) or empty($password)) {
        echo 'Rellene completo el formulario';
    } else {
        //echo $usuario . ' - ' . $password;
        if ($usuario ==  $user_register && $password == $pass_register) {
            echo 'Listo, iniciaste sesión 🥰';
            header('Location: user.php');
        } else {
            echo '<br>' . 'Tu usuario no existe 😭';
        }
    }
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

    <h1>Página de inicio</h1>

    <form action="index.php" method="POST">
        <label for="user">User</label>
        <input type="text" placeholder="User" name="user">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
        <button type="submit">Iniciar</button>
    </form>

    <a href="./registro.php">Registrate</a>


</body>

</html>