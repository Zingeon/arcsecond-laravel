<?php
/**
 * Part of Arcsecond package
 *
 * Votes API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Votes extends API
{
    public $model = [
        'difficulty',
        'creation_date',
        'last_update_date',
        'count',
        'title',
        'subtitle',
        'url',
        'category',
        'eta',
        'price',
        'type',
        'distribution',
        'session'
    ];

    /**
     * Get a list of Votes
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('votes/', $queryParams);
    }

    /**
     * Get a Vote by id
     *
     * @param integer $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemById($id, $queryParams = []) {
        return $this->get('votes/' . $id, $queryParams);
    }

    /**
     * Update a Vote by id
     *
     * @param integer $id
     * @param array $params
     * @return mixed
     */
    public function updateItemById($id, $params) {
        return $this->putOrPatch('votes/' . $id . '/', $params);
    }
}
