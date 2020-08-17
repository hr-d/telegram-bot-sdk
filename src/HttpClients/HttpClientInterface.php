<?php

namespace Telegram\Bot\HttpClients;

/**
 * Interface HttpClientInterface.
 */
interface HttpClientInterface
{
    /**
     * @param            $url
     * @param            $method
     * @param array      $headers
     * @param array      $options
     * @param int        $timeOut
     * @param bool|false $isAsyncRequest
     * @param int        $connectTimeOut
     * @param string     $proxy
     *
     * @return mixed
     */
    public function send(
        $url,
        $method,
        array $headers = [],
        array $options = [],
        $timeOut = 30,
        $isAsyncRequest = false,
        $connectTimeOut = 10,
        $proxy = ''
    );
}
