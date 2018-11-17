<?php
$servername = "localhost";
$username = "s105035041";
$password = "n2xZ0xEN";
$datalocate = "s105035041_gopro";
$link = new mysqli($servername, $username, $password,$datalocate);
if(!$link){
    echo "Error: Unable to connect to MySQL" . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_error() . PHP_EOL;
    echo "Debugging error:" . mysqli_connect_error() . PHP_EOL;
    exit;
}

$link->set_charset("utf-8");
/**
 * Created by PhpStorm.
 * User: 浩哲
 * Date: 2018/11/17
 * Time: 下午 03:44
 */