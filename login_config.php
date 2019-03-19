<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 19-3-2019
 * Time: 13:16
 */


if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: index.php');
    exit;
}

session_start();

require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];




if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter username.";
    }
    else {
        $username = trim($_POST["username"]);
    }