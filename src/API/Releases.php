<?php
/**
 * Part of Arcsecond package
 *
 * Releases API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Releases extends API
{
    /**
     * Get a List of Releases declared by Arcsecond.io
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('releases/', $queryParams);
    }

}
