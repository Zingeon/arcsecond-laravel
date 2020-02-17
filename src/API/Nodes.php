<?php
/**
 * Part of Arcsecond package
 *
 * Nodes API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Nodes extends API
{
    public $model = [
        'name',
        'color',
        'notes',
        'is_folder',
        'is_open',
        'target_name',
        'target_coordinates',
        'target_class',
        'parent',
        'before',
        'after',
        'children',
        'index'
    ];

    /**
     * View used for manipulating a node
     *
     * @param string $root
     * @param integer $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByRootId($root, $id, $queryParams = []) {
        return $this->get('nodes/' . $root . '/' .$id, $queryParams);
    }

    /**
     * Update a Node
     *
     * @param string $root
     * @param integer $id
     * @param $params
     * @return mixed
     */
    public function updateItemByRootId($root, $id, $params) {
        return $this->putOrPatch('nodes/' . $root . '/' .$id, $params);
    }

    /**
     * Add a Node
     *
     * @param string $root
     * @param integer $id
     * @param $parameters
     * @return mixed
     */
    public function addItemByRootId($root, $id, $parameters) {
        return $this->post('nodes/' . $root . '/' .$id, $parameters);
    }

    /**
     * Delete a Node
     *
     * @param string $root
     * @param integer $id
     * @return mixed
     */
    public function deleteItemByRootId($root, $id) {
        return $this->delete('nodes/' . $root . '/' .$id);
    }
}
