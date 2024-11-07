<?php
// Update timeouts because the request can take a while
set_time_limit(0);
ini_set('default_socket_timeout', 600);

try {
    $options = [
        'uri' => 'http://localhost:12312/',
        'location' => 'http://localhost:12312/soap-server.php',
        'trace' =>true,
        'connection_timeout' => 5000,
        'cache_wsdl' => WSDL_CACHE_NONE,
        'keep_alive' => false,
    ];
    $client = new SoapClient(null, $options);
    echo $client->getMessage();
} catch (SoapFault $e) {
    echo $e->getMessage();
}