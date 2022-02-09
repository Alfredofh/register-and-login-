<?php require 'connection.php';

session_start();
//comprobamos los campos y
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    // preparamos la query 
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
    //creamos el parametro :email
    $records->bindParam('email', $_POST['email']);
    //ejecutamos la consulta
    $records->execute();
    //obtenemos los resultados
    $results = $records->fetch(PDO::FETCH_ASSOC);

    //manejamos los datos
    $message = '';
    //comprobamos si la contraseña que está imtroduciendo, es la misma que tenemos en la BD
    if ($results > 0 && password_verify($_POST['password'], $results['password'])) {
        //iniciamos sesion
        $_SESSION['user_id'] = $results['id'];
        //redirecionamos
        header('Location: login.php ');
    } else {
        $message = "Usuario o contraseña incorrectos";
    }
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>

<body>
    <?php require 'partials/header.php' ?>
    <span>or <a href="signup.php">SignUp</a></span>

    <form action="login.php" method="POST">
        <input name="email" type="text" placeholder="Enter your email">
        <input name="password" type="password" placeholder="Enter your Password">
        <input type="submit" value="Submit">
    </form>
</body>

</html>