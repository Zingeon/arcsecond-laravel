<?php
/**
 * Part of Arcsecond package
 *
 * Telescopestations API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Telescopestations extends API
{
    /**
     * Get a list of Telescope Stations
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('telescopestations/', $queryParams);
    }
}
