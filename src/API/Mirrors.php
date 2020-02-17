<?php
/**
 * Part of Arcsecond package
 *
 * Mirrors API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Mirrors extends API
{
    public $model = [
        'mirror_index',
        'diameter',
        'thickness',
        'coating',
        'central_obscuration',
        'material',
        'telescope'
    ];

    /**
     * Get a list of mirrors
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('mirrors/', $queryParams);
    }

    /**
     * Get a Mirror details by id
     *
     * @param string $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemById($id, $queryParams = []) {
        return $this->get('mirrors/' . $id, $queryParams);
    }

    /**
     * Update Mirror details by id
     *
     * @param string $id
     * @param array $params
     * @return mixed
     */
    public function updateItemById($id, $params) {
        return $this->putOrPatch('mirrors/' . $id . '/', $params);
    }
}
