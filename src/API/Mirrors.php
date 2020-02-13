<?php

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

    public function getItems() {
        return $this->get('mirrors/');
    }

    public function getItemById($id) {
        return $this->get('mirrors/' . $id);
    }

    public function updateItemById($id, $parameters) {
        return $this->_put_or_patch('mirrors/' . $id . '/', $parameters);
    }
}
