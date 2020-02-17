<?php
/**
 * Part of Arcsecond package
 *
 * Observingruns API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Observingruns extends API
{
    public $model = [
        'name',
        'profile',
        'observing_site',
        'night_logs',
        'journal'
    ];

    /**
     * Get an Observingrun details by id
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByUUID($uuid, $queryParams = []) {
        return $this->get('observingruns/' . $uuid, $queryParams);
    }

    /**
     * Update an Observingrun details by id
     *
     * @param string $uuid
     * @param array $params
     * @return mixed
     */
    public function updateItemByUUID($uuid, $params) {
        return $this->putOrPatch('observingruns/' . $uuid . '/', $params);
    }

    /**
     * Delete an Observingrun details by id
     *
     * @param string $uuid
     * @return mixed
     */
    public function deleteItemByUUID($uuid) {
        return $this->delete('observingruns/' . $uuid);
    }
}
