<?php

namespace Zingeon\ArcsecondLaravel;


class Config implements ConfigInterface
{
    public $apiKey;
    public $apiUrl;

    public function __construct() {
        $this->setApiKey(getenv('ARCSECOND_API_KEY'));
        $this->setApiUrl(getenv('ARCSECOND_API_URL'));
    }

    public function getApiKey() {
        return $this->apiKey;
    }

    public function setApiKey($apiKey) {
        $this->apiKey = $apiKey;
    }

    public function setApiUrl($apiUrl) {
        $this->apiUrl = $apiUrl;
    }

    public function getApiUrl() {
        return $this->apiUrl;
    }

}
