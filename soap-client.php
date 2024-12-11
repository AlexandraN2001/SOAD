<?php
$options = [
    'location' => "http://soap-server:8000/soap-server.php",
    'uri' => "http://soap-server:8000",
    'trace' => 1,  
    'exceptions' => true, 
];

try {
    $client = new SoapClient(null, $options);
    $response = $client->greet("World");
    echo $response;  // It should display "Hello, World"
} catch (SoapFault $e) {
    echo "Error: " . $e->getMessage();
}
