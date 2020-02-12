<?php

namespace Zingeon\ArcsecondLaravel\API;

use GuzzleHttp\Client;
use Zingeon\ArcsecondLaravel\ConfigInterface;

class API
{
    private $config;

    public function __construct(ConfigInterface $config) {
        $this->config = $config;
    }

    protected function preparePaginationParams($pageSize, $page) {
        $params = [];
        if (!is_null($pageSize)) {
            $params['query']['page_size'] = $pageSize;
        }

        if (!is_null($page)) {
            $params['query']['page'] = $page;
        }

        return $params;
    }

    protected function _get($uri = null, $params = []) {
        return json_decode((string) $this->execute()->get($uri, $params)->getBody(), true);
    }

    protected function _post($uri = null, $params = []) {
        return json_decode((string) $this->execute()->post($uri, $params)->getBody(), true);
    }

    protected function _delete($uri = null, $params = []) {
        return json_decode((string) $this->execute()->delete($uri, $params)->getBody(), true);
    }

    protected function _put($uri = null, $params = []) {
        return json_decode((string) $this->execute()->put($uri, $params)->getBody(), true);
    }

    protected function _patch($uri = null, $params = []) {
        return json_decode((string) $this->execute()->patch($uri, $params)->getBody(), true);
    }

    private function execute() {
        return new Client(['base_uri' => $this->config->apiUrl]);
    }
}
