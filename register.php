<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 18-3-2019
 * Time: 16:43
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Registreer</title>
</head>
<body>

<header>
    <h1>De Gokkers</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
    </nav>
</header>

<div class="login">
    <form action="register_config.php" method="post">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="E-Mail" required>

        <label for="password">Wachtwoord</label>
        <input type="password" id="password" name="password" placeholder="Wachtwoord" required minlength="7">

        <input type="submit" value="Registreer">
    </form>
</div>

</body>
</html>
