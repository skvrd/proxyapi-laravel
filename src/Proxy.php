<?php

namespace Skvrd\ProxyAPI;
use GuzzleHttp\Client;

class Proxy {
    
    private $proxy;

    public function __construct() {
        $client = new Client([
            // This have to move to config i guess
            'timeout'  => 5.0,
        ]);
        $response = $client->get('http://proxyapi.me/api/proxy');
        $body = (string) $response->getBody();
        $proxy_object = json_decode($body);
        $this->proxy = $proxy_object->data;
    }
    
    public function get() {
        return $this->proxy;
    }
}