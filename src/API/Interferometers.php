<?php
/**
 * Part of Arcsecond package
 *
 * Interferometers API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Interferometers extends API
{

    /**
     * Get a list of Interferometers
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('interferometers/', $queryParams);
    }

    /**
     * Get an Interferometer details by UUID
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByUUID($uuid, $queryParams = []) {
        return $this->get('interferometers/' . $uuid, $queryParams);
    }
}
