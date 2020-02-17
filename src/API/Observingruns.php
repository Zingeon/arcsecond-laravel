<?php

namespace Zingeon\ArcsecondLaravel\API;


class Observingruns extends API
{
    public $model = [
        'name',
        'profile',
        'observing_site',
        'night_logs',
        'journal'
    ];

    public function getItemByUUID($uuid) {
        return $this->get('observingruns/' . $uuid);
    }

    public function updateItemByUUID($uuid, $parameters) {
        return $this->putOrPatch('observingruns/' . $uuid . '/', $parameters);
    }

    public function deleteItemByUUID($uuid) {
        return $this->delete('observingruns/' . $uuid);
    }
}
