<?php
namespace thewulf7\travelPayouts;


use thewulf7\travelPayouts\components\iClient;
use thewulf7\travelPayouts\components\ServiceInjector;

/**
 * Class Travel
 *
 * @package thewulf7\travelPayouts
 */
class Travel
{
    use ServiceInjector;

    /**
     * @var iClient
     */
    private $_client;

    /**
     * @param iClient $client
     */
    public function __construct(iClient $client)
    {
        $this->setClient($client);
    }

    /**
     * Get client
     *
     * @return iClient
     */
    public function getClient()
    {
        return $this->_client;
    }

    /**
     * Get client
     *
     * @param iClient $client
     */
    protected function setClient(iClient $client)
    {
        $this->_client = $client;
    }

    /**
     * Get Token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->_client->getToken();
    }
}