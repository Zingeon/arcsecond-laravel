<?php

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

    public function getItemByRootId($root, $id) {
        return $this->get('nodes/' . $root . '/' .$id);
    }

    public function updateItemByRootId($root, $id, $parameters) {
        return $this->putOrPatch('nodes/' . $root . '/' .$id, $parameters);
    }

    public function addItemByRootId($root, $id, $parameters) {
        return $this->post('nodes/' . $root . '/' .$id, $parameters);
    }

    public function deleteItemByRootId($root, $id) {
        return $this->delete('nodes/' . $root . '/' .$id);
    }
}
