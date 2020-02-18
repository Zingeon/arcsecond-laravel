<?php
/**
 * Part of Arcsecond package
 *
 * Entrypoint for creating API instances
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel;

use ReflectionClass;

class Arcsecond
{
    protected $config;

    /**
     * Arcsecond constructor.
     *
     * return void
     */
    public function __construct($apiKey = null, $apiUrl = null) {
        $this->config = new Config($apiKey, $apiUrl);
    }

    /**
     * Get Config instance
     *
     * @return Config
     */
    public function getConfig() {
        return $this->config;
    }

    /**
     * Dynamically handle missing methods
     *
     * @param string $method
     * @param array $params
     * @return mixed
     * @throws \ReflectionException
     */
    public function __call($method, $params) {
        return $this->getApiInstance($method);
    }

    /**
     * Returns the API class instance for the given method
     *
     * @param string $method
     * @return mixed
     * @throws \ReflectionException
     */
    private function getApiInstance($method) {
        $class = '\\Zingeon\\ArcsecondLaravel\\API\\' . ucfirst($method);
        if(class_exists($class) && ! (new ReflectionClass($class))->isAbstract()) {
            return new $class($this->config);
        }

        throw new \BadMethodCallException("Undefined method $method");
    }
}
