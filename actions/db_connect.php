<?php
$hostName = "127.0.0.1";
$userName = "root";
$password = "";
$dbName = "be16_cr12_lacasamia_hasan_acartuerk";


$connect = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$connect) {
    echo "error";
    exit;
};