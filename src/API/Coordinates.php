<?php
/**
 * Part of Arcsecond package
 *
 * Coordinates API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Coordinates extends API
{
    /**
     * Get coordinates by id
     *
     * @param integer $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemById($id, $queryParams = []) {
        return $this->get('coordinates/' . $id, $queryParams);
    }

}
