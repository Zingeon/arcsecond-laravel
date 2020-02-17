<?php
/**
 * Part of Arcsecond package
 *
 * Telescopes API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Telescopes extends API
{
    /**
     * Get a list of Telescopes
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('telescopes/', $queryParams);
    }

    /**
     * Get Telescopes updates
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItemsUpdates($queryParams = []) {
        return $this->get('telescopes/updates/', $queryParams);
    }

    /**
     * Get Telescope details by UUID
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByUUID($uuid, $queryParams = []) {
        return $this->get('telescopes/' . $uuid, $queryParams);
    }

}
