<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 18-3-2019
 * Time: 14:25
 */


$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'degokkersphp';

$dsn= "mysql:host=$dbHost;dbname=$dbName";
$db = new PDO($dsn, $dbUser, $dbPassword);

$db->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);


//if($db){
//   echo "Connected to the $dbName database successfully!";
//}