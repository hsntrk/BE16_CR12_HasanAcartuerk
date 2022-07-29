<?php

require_once 'actions/db_connect.php';
require_once 'actions/toolBox.php';

// this file print from it type of json
header('Content-Type: application/json');
// bringing from database
header('Access-Control-Allow-Method: GET');

// bringing all the data, server request is GET, then Query ...
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    // to show all columns from table for example
    $sql = "SELECT * FROM properties";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // now creating a API with the next line
        response(200, "Data fetched succesfully", $row);
        // inside a string there is a object called status and so on...
    } else {
        response(400, 'error');
    }
}