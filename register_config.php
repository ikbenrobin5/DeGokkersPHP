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

require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];


if (preg_match('/\s/',$password) == false) {

    if (isPartUppercase($password) == false && preg_match('#[0-9]#', $password)) {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO profiles ( email, password ) VALUES ( :email, :password)";

        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':email' => $email,
            ':password' => $hashed_password
        ]);

        header('Location: login.php');
    } else {
        echo 'Je hebt een hoofdletter nodig in je wachtwoord en een nummer.';
    }
}else{
    echo'Je mag geen spaties in je wachtwoord hebben';
}

function isPartUppercase($password) {
    if(preg_match("/[A-Z]/", $password)===0) {
        return true;
    }
    return false;
}

