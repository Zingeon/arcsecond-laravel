<?php
/**
 * Part of Arcsecond package
 *
 * Votessessions API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Votessessions extends API
{
    public $model = [
        'content',
        'session'
    ];

    /**
     * Get a list of Votessessions
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('votessessions/', $queryParams);
    }

    /**
     * Get a Votessession by id
     *
     * @param integer $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemById($id, $queryParams = []) {
        return $this->get('votessessions/' . $id, $queryParams);
    }

    /**
     * Get Votessessions comments
     *
     * @param string $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemComments($id, $queryParams = []) {
        return $this->get('votessessions/' . $id . '/comments/', $queryParams);
    }

    /**
     * Add a Votessessions comment
     *
     * @param string $id
     * @param array $params
     * @return mixed
     */
    public function addItemComment($id, $params) {
        return $this->post('votessessions/' . $id . '/comments/', $params);
    }

    /**
     * Get a Votessessions votes list
     *
     * @param string $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemVotes($id, $queryParams = []) {
        return $this->get('votessessions/' . $id . '/votes/', $queryParams);
    }
}
