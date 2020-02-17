<?php
/**
 * Part of Arcsecond package
 *
 * Observingsites API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Observingsites extends API
{

    /**
     * Get an Observingsites list
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('observingsites/', $queryParams);
    }

    /**
     * Get an Observingsites updates
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItemsUpdates($queryParams = []) {
        return $this->get('observingsites/updates/', $queryParams);
    }

    /**
     * Get an Observingsite details by id
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByUUID($uuid, $queryParams = []) {
        return $this->get('observingsites/' . $uuid, $queryParams);
    }

    /**
     * Get an Observingsite images
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemImages($uuid, $queryParams = []) {
        return $this->get('observingsites/' . $uuid . '/images/', $queryParams);
    }

    /**
     * Get an Observingsite interferometers
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemInterferometers($uuid, $queryParams = []) {
        return $this->get('observingsites/' . $uuid . '/interferometers/', $queryParams);
    }

    /**
     * Get an Observingsite telescopes
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemTelescopes($uuid, $queryParams = []) {
        return $this->get('observingsites/' . $uuid . '/telescopes/', $queryParams);
    }

    /**
     * Get an Observingsite weather
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemWeather($uuid, $queryParams = []) {
        return $this->get('observingsites/' . $uuid . '/weather/', $queryParams);
    }
}
