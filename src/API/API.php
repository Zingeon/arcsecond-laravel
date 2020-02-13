<?php

namespace Zingeon\ArcsecondLaravel\API;

use GuzzleHttp\{Client, RequestOptions};
use Zingeon\ArcsecondLaravel\ConfigInterface;

class API
{
    private $config;
    protected $model;

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

    private function _isInputEqualToModel($input) {
        $intersection = array_intersect($input, $this->model);
        $difference = array_diff($this->model, $input);
        return count($intersection) === count($this->model) && !$difference;
    }

    protected function _put_or_patch(string $uri, $input) {
        $isPutMethod = $this->_isInputEqualToModel(array_keys($input));

        if($isPutMethod) {
            return $this->put($uri, $input);
        } else {
            return $this->patch($uri, $input);
        }
    }

    private function _handleMultipartData($input) {
        $parameters = [];
        foreach((array)$input as $name => $content) {
            //if file
            if(is_array($content) && !array_diff(['name', 'contents', 'filename'], array_keys($content))) {
                $parameters['multipart'][] = [
                    'name' => $content['name'],
                    'contents' => $content['contents'],
                    'filename' => $content['filename']
                ];
                continue;
            }

            //if trivial form data
            $parameters['multipart'][] = [
                'name' => $name,
                'contents' => $content
            ];
        }

        return $parameters;
    }

    private function _handleQueryData($input) {
        $parameters = [];
        foreach((array)$input as $name => $content) {
            $parameters['query'][$name] = $content;
        }
        return $parameters;
    }

    protected function get($uri = null, $params = []) {
        $params = $this->_handleQueryData($params);
        return json_decode((string) $this->execute()->get($uri, $params)->getBody(), true);
    }

    protected function post($uri = null, $params = []) {
        $params = $this->_handleMultipartData($params);
        return json_decode((string) $this->execute()->post($uri, $params)->getBody(), true);
    }

    protected function _delete($uri = null, $params = []) {
        return json_decode((string) $this->execute()->delete($uri, $params)->getBody(), true);
    }

    protected function put($uri = null, $params = []) {
        $params = $this->_handleMultipartData($params);
        return json_decode((string) $this->execute()->put($uri, $params)->getBody(), true);
    }

    protected function patch($uri = null, $params = []) {
        $params = $this->_handleMultipartData($params);
        return json_decode((string) $this->execute()->patch($uri, $params)->getBody(), true);
    }

    private function execute() {
        return new Client(['base_uri' => $this->config->apiUrl]);
    }
}
