<?php

namespace Reactphp\Framework\Bridge\Interface;

interface CreateConnectionInterface
{
    public function setCall(CallInterface $call);
    public function createConnection($uuid, $timeout = 3);
    public function getConnections();
    public function getControlUuidByTunnelStream($stream);
    
}