<?php
// proporties status only to check if the api is ok, then message lets say if it is created, data with array for example
function response($status, $message, $data = null)
{
    $response = new stdClass();
    $response->status = $status;
    $response->message = $message;
    $response->data = $data;
    // convert it to string, because API is json
    echo json_encode($response);
}