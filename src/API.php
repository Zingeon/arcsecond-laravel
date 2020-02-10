<?php

namespace Zingeon\ArcsecondLaravel;

use GuzzleHttp\Client;

class API
{
    protected $url;

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }
}
