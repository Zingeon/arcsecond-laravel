<?php
/**
 * Part of Arcsecond package
 *
 * People API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class People extends API
{
    /**
     * Get a list of people
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('people/', $queryParams);
    }
}
