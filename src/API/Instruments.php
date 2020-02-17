<?php
/**
 * Part of Arcsecond package
 *
 * Instruments API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Instruments extends API
{
    /**
     * Get a list of instruments
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('instruments/', $queryParams);
    }

    /**
     * Get an Intrument by UUID
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByUUID($uuid, $queryParams = []) {
        return $this->get('instruments/' . $uuid, $queryParams);
    }

}
