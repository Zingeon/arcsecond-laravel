<?php
/**
 * Part of Arcsecond package
 *
 * Standardstars API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Standardstars extends API
{
    /**
     * Get a List of Standard Stars
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('standardstars/', $queryParams);
    }

}
