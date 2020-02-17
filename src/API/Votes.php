<?php

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

    public function getItems() {
        return $this->get('votes/');
    }

    public function getItemById($id) {
        return $this->get('votes/' . $id);
    }

    public function updateItemById($id, $parameters) {
        return $this->putOrPatch('votes/' . $id . '/', $parameters);
    }
}
