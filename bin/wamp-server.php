<?php
// Your shell script
use Ratchet\Wamp\WampServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Wamp;

    $server = IoServer::factory(
        new WsServer(
            new WampServer(
                new BasicPubSub
            )
        )
    );
    $server->run();
