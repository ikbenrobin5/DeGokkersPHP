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

