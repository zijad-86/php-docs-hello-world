<?php

echo "Hello Azureeas!";

$apidata = "https://d192b65.myviolet.de/getBackofficeData"; // Replace with your desired URL

$response = file_get_contents($apidata);

// format the Json data from $response
$response = json_decode($response, true);

// Handle the response as needed
echo $response;

?>