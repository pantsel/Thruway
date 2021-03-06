<?php

namespace Thruway\Transport;

use Thruway\Manager\ManagerInterface;
use Thruway\Peer\AbstractPeer;
use React\EventLoop\LoopInterface;

/**
 * Interface class for transport provider
 *
 * @package Thruway\Transport
 */
interface TransportProviderInterface
{

    /**
     * @param \Thruway\Peer\AbstractPeer $peer
     * @param \React\EventLoop\LoopInterface $loop
     */
    public function startTransportProvider(AbstractPeer $peer, LoopInterface $loop);

    /**
     * @return \Thruway\Manager\ManagerInterface
     */
    public function getManager();

    /**
     * @param \Thruway\Manager\ManagerInterface $managerInterface
     */
    public function setManager(ManagerInterface $managerInterface);

}
