<?php

// Define the URL of your Node.js server
$nodeJsUrl = "http://localhost:3002/verification_mail";

// Data to be sent in the POST request
$data = array(
    "recipient" => $email,
    "code" => $code,
    "password" => $pass,
    "uid" => $uid
);

// Convert data to JSON format
$dataJson = json_encode($data);

// Set up HTTP headers
$options = array(
    'http' => array(
        'header' => "Content-type: application/json\r\n",
        'method' => 'POST',
        'content' => $dataJson
    )
);

// Create context stream
$context = stream_context_create($options);

// Make the POST request to the Node.js server
$response = file_get_contents($nodeJsUrl, false, $context);

?>