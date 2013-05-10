<?php
// Your shell script
use Ratchet\Server\IoServer;

$server = IoServer::factory(new MyApp, 8080); // Run your app on port 8080
$server->run();
