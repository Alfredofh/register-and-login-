<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sign Up</title>
</head>

<body>
    <?php require 'partials/header.php' ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST">
        <input name="email" type="text" placeholder="Enter your email">
        <input name="password" type="password" placeholder="Enter your Password">
        <input name="confirm_password" type="password" placeholder="Confirm Password">
        <input type="submit" value="Submit">
    </form>

    </form>
</body>

</html>