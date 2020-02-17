<?php
/**
 * Part of Arcsecond package
 *
 * Implementation of base API functionality
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;

use GuzzleHttp\Client;
use Zingeon\ArcsecondLaravel\ConfigInterface;

class API
{
    /**
     * The Config repository interface
     *
     * @var \Zingeon\ArcsecondLaravel\ConfigInterface
     */
    private $_config;

    /**
     * Concrete API model
     *
     * @var array
     */
    protected $model;

    /**
     * API constructor
     *
     * @param \Zingeon\ArcsecondLaravel\ConfigInterface $config
     */
    public function __construct(ConfigInterface $config) {
        $this->_config = $config;
    }

    /**
     * Define whether input parameters are completely equal to the concrete API model
     *
     * @param array $input
     * @return bool
     */
    private function _isInputEqualToModel($input = []) {
        $intersection = array_intersect($input, $this->model);
        $difference = array_diff($this->model, $input);
        return count($intersection) === count($this->model) && !$difference;
    }

    /**
     * Sends PUT or PATCH request depending on parameters
     *
     * @param string $uri
     * @param array $input
     * @return mixed
     */
    protected function putOrPatch(string $uri, $input) {
        $isPutMethod = $this->_isInputEqualToModel(array_keys($input));

        if($isPutMethod) {
            return $this->put($uri, $input);
        } else {
            return $this->patch($uri, $input);
        }
    }

    /**
     * Transforms parameters data for POST, PUT and PATCh requests into appropriate GuzzleHTTP format
     *
     * @param array $input
     * @return array
     */
    private function _handleMultipartData($input = []) {
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

    /**
     * Put query data into 'query' array
     *
     * @param $input
     * @return array
     */
    private function _handleQueryData($input = []) {
        $parameters = [];
        foreach((array)$input as $name => $content) {
            $parameters['query'][$name] = $content;
        }
        return $parameters;
    }

    /**
     * Send a GET request
     *
     * @param string $uri
     * @param array $params
     * @return mixed
     */
    protected function get(string $uri, $params = []) {
        $params = $this->_handleQueryData($params);
        return json_decode((string) $this->_execute()->get($uri, $params)->getBody(), true);
    }

    /**
     * Send a POST request
     *
     * @param string $uri
     * @param array $params
     * @return mixed
     */
    protected function post(string $uri, $params = []) {
        $params = $this->_handleMultipartData($params);
        return json_decode((string) $this->_execute()->post($uri, $params)->getBody(), true);
    }

    /**
     * Send a DELETE request
     *
     * @param string $uri
     * @param array $params
     * @return mixed
     */
    protected function delete(string $uri, $params = []) {
        return json_decode((string) $this->_execute()->delete($uri, $params)->getBody(), true);
    }

    /**
     * send a PUT request
     *
     * @param string $uri
     * @param array $params
     * @return mixed
     */
    protected function put(string $uri, $params = []) {
        $params = $this->_handleMultipartData($params);
        return json_decode((string) $this->_execute()->put($uri, $params)->getBody(), true);
    }

    /**
     * Send a PATCH request
     *
     * @param string $uri
     * @param array $params
     * @return mixed
     */
    protected function patch(string $uri, $params = []) {
        $params = $this->_handleMultipartData($params);
        return json_decode((string) $this->_execute()->patch($uri, $params)->getBody(), true);
    }

    /**
     * Execute the HTTP request
     *
     * @return \GuzzleHttp\Client
     */
    private function _execute() {
        return new Client(['base_uri' => $this->_config->apiUrl]);
    }
}
