<?php
/**
 * Part of Arcsecond package
 *
 * Nightlogs API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Nightlogs extends API
{
    public $model = [
        'date',
        'start_time',
        'journal',
        'average_overhead',
        'observing_run',
        'telescope',
        'observations',
        'datasets',
        'align'
    ];

    /**
     * Ger Nightlog by UUID
     *
     * @param string $uuid
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByUUID($uuid, $queryParams = []) {
        return $this->get('nightlogs/' . $uuid, $queryParams);
    }

    /**
     * Update Nightlog by UUID
     *
     * @param string $uuid
     * @param array $params
     * @return mixed
     */
    public function updateItemByUUID($uuid, $params) {
        return $this->putOrPatch('nightlogs/' . $uuid . '/', $params);
    }

    /**
     * Delete Nightlog by UUID
     *
     * @param string $uuid
     * @return mixed
     */
    public function deleteItemByUUID($uuid) {
        return $this->delete('nightlogs/' . $uuid);
    }
}
