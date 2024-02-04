<?php

require __DIR__ . '/../vendor/autoload.php';

use Reactphp\Framework\Bridge\Server;
use Reactphp\Framework\Bridge\Pool;
use Reactphp\Framework\Bridge\Verify\VerifyUuid;
use Reactphp\Framework\Bridge\DecodeEncode\TcpDecodeEncode;
use Reactphp\Framework\Bridge\Tcp\TcpBridge;
use Reactphp\Framework\Bridge\Io\Tcp;

Server::$debug = true;

$server = new Server(new VerifyUuid([
    '8d24e2ba-c6f8-4bb6-8838-cacd37f64165' => '10.10.10.1',
    'c4b34f0d-44fa-4ef5-9d28-ccef218d74fb' => '10.10.10.2',
    '41c5ee60-0628-4b11-9439-a10ba19cbcdd' => '10.10.10.3'
]), new TcpDecodeEncode);



$tcp = new Tcp('0.0.0.0:8010', new TcpBridge($server));

$pool = new Pool($server, [
    'max_connections' => 20,
    'connection_timeout' => 2,
    'keep_alive' => 5,
    'wait_timeout' => 3
]);