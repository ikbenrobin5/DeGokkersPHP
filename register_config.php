<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 19-3-2019
 * Time: 10:50
 */


if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: index.php');
    exit;
}

require "config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO profiles (email, password) VALUES ( :email, :password)";

$prepare = $db->prepare($sql);
$prepare->execute([
    ':email' => $email,
    ':password' => $password
]);

header('Location: login.php');