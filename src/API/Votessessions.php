<?php

namespace Zingeon\ArcsecondLaravel\API;


class Votessessions extends API
{
    public $model = [
        'content',
        'session'
    ];

    public function getItems() {
        return $this->get('votessessions/');
    }

    public function getItemById($id) {
        return $this->get('votessessions/' . $id);
    }

    public function getItemComments($id) {
        return $this->get('votessessions/' . $id . '/comments/');
    }

    public function addItemComment($id, $params) {
        return $this->post('votessessions/' . $id . '/comments/', $params);
    }

    public function getItemVotes($id) {
        return $this->get('votessessions/' . $id . '/votes/');
    }
}
