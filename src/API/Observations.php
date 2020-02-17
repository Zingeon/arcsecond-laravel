<?php
/**
 * Part of Arcsecond package
 *
 * Observations API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Observations extends API
{
    public $model = [
        'index',
        'night_log',
        'targets',
        'exposures',
        'notes'
    ];

    /**
     * Get Observation by UUID
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByUUID($uuid, $queryParams = []) {
        return $this->get('observations/' . $uuid, $queryParams);
    }

    /**
     * Update Observation by UUID
     *
     * @param string $uuid
     * @param array $params
     * @return mixed
     */
    public function updateItemByUUID($uuid, $params) {
        return $this->putOrPatch('observations/' . $uuid . '/', $params);
    }

    /**
     * Delete Observation by UUID
     *
     * @param string $uuid
     * @return mixed
     */
    public function deleteItemByUUID($uuid) {
        return $this->delete('observations/' . $uuid);
    }
}
