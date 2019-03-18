<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 18-3-2019
 * Time: 14:25
 */


$dbHost = "localhost";
$dbName = "degokkersphp";
$dbUser = "root";
$dbPassword = "";

$dsn= "mysql:host=$dbHost;dbName=$dbName";
$db = new PDO($dsn, $dbUser, $dbPassword);

$db->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);


//if($db){
//    echo "Connected to the $dbName database successfully!";
//}