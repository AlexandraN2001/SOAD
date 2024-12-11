<?php
// soap-server.php
ini_set("soap.wsdl_cache_enabled", "0"); // Disable WSDL cache for development

// Define the class that will implement the service
class HelloWorld {
    public function sayHello($name) {
        return "Hello, " . $name;
    }
}

// Create a SOAP server
$server = new SoapServer(null, array('uri' => 'http://localhost/soap-server.php'));
$server->setClass('HelloWorld');
$server->handle();
?>
