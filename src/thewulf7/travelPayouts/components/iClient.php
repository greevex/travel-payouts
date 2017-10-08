<?php

namespace thewulf7\travelPayouts\components;

/**
 * Client interface
 *
 * @package thewulf7\travelPayouts\components
 */
interface iClient
{

    /**
     * Initialize client with access token
     *
     * @param string $token
     */
    public function __construct($token);

    /**
     * @param string    $url
     * @param array     $options
     * @param string    $type
     * @param bool|true $replaceOptions
     *
     * @return mixed
     */
    public function execute($url, array $options, $type = 'GET', $replaceOptions = true);

    /**
     * @return mixed
     */
    public function getApiVersion();

    /**
     * @param mixed $apiVersion
     *
     * @return $this
     */
    public function setApiVersion($apiVersion);

    /**
     * Get Token
     *
     * @return string
     */
    public function getToken();
}