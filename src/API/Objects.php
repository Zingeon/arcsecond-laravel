<?php
/**
 * Part of Arcsecond package
 *
 * Objects API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Objects extends API
{
    /**
     * Get a list of Objects
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('objects/', $queryParams);
    }

    /**
     * Get an Object details by name
     *
     * @param string $name
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByName($name, $queryParams = []) {
        return $this->get('objects/' . $name, $queryParams);
    }

    /**
     * Get an Object coordinates by name
     *
     * @param string $name
     * @param array $queryParams
     * @return mixed
     */
    public function getItemCoordinates($name, $queryParams = []) {
        return $this->get('objects/' . $name . '/coordinates/', $queryParams);
    }
}
