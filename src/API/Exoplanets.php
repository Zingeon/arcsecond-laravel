<?php
/**
 * Part of Arcsecond package
 *
 * Exoplanets API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Exoplanets extends API
{

    /**
     * Get a list of all Exoplanets
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('exoplanets/', $queryParams);
    }

    /**
     * Get an Exoplanet details by its name
     *
     * @param string $name
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByName($name, $queryParams = []) {
        return $this->get('exoplanets/' . $name, $queryParams);
    }

    /**
     * Get an Exoplanet coordinates by its name
     *
     * @param string $name
     * @param array $queryParams
     * @return mixed
     */
    public function getItemCoordinates($name, $queryParams = []) {
        return $this->get('exoplanets/' . $name . '/coordinates/', $queryParams);
    }
}
