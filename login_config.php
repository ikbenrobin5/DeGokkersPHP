<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 19-3-2019
 * Time: 13:16
 */


if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    exit;
}

//    //begin van Jimmy's login ding
//    require 'config.php';
//
//    $email = mysqli_real_escape_string($db, $_POST['email']);
//    $password = mysqli_real_escape_string($db, $_POST['password']);
//
//    $password = md5($password);
//
//    $query = "SELECT * FROM profiles WHERE email = '$email' and password = '$password' ";
//    $results = mysqli_query($db, $query);
//
//    if (mysqli_num_rows($results)){
//        $_SESSION['email'] = $email;
//        $_SESSION['succes'] = "Logged in succesfully";
//        header('Location: index.php');
//    }
//    else{
//        echo "Wrong username/Password please try again";
//    }


require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM profiles WHERE (email=:email) AND (password=:password)";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':email' => $email,
    ':password' => $password
]);

if ($prepare = true){
    header('Location: index.php');
}elseif ($prepare = false){
    header('Location: register.php ');
}
