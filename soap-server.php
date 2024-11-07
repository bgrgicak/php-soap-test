<?php
// Increase the execution time limit
set_time_limit(0);  // Set to 120 seconds or 0 for unlimited

// Make sure we're only processing SOAP requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 400 Bad Request');
    die('This is a SOAP server. Only POST requests are allowed.');
}

class TestSoapServer
{
    public function getMessage()
    {
        return 'Hello, World!';
    }
}
$options = ['uri' => 'http://localhost:12312/'];
$server = new SoapServer(null, $options);
$server->setClass('TestSoapServer');
$server->handle();