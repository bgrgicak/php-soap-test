<?php
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