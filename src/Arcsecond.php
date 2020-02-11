<?php

namespace Zingeon\ArcsecondLaravel;

use ReflectionClass;

class Arcsecond
{
    protected $config;

    public function __construct() {
        $this->config = new Config();
    }

    public function __call($method, $params) {
        return $this->getApiInstance($method);
    }

    private function getApiInstance($method) {
        $class = '\\Zingeon\\ArcsecondLaravel\\API\\' . ucfirst($method);
        if(class_exists($class) && ! (new ReflectionClass($class))->isAbstract()) {
            return new $class($this->config);
        }

        throw new \BadMethodCallException("Undefined method $method");
    }
}
