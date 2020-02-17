<?php
/**
 * Part of Arcsecond package
 *
 * Programmes API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Programmes extends API
{
    /**
     * Get a List of Programmes related to Data Rows inside Archives
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('programmes/', $queryParams);
    }

}
