<?php
/**
 * Part of Arcsecond package
 *
 * Activities API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Activities extends API
{

    /**
     * Gets all observing activities around the world
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('activities/', $queryParams);
    }

    /**
     * Get specific activity by id
     *
     * @param integer $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemById($id, $queryParams = []) {
        return $this->get('activities/' . $id, $queryParams);
    }
}
