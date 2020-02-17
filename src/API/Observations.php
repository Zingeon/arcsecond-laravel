<?php

namespace Zingeon\ArcsecondLaravel\API;


class Observations extends API
{
    public $model = [
        'index',
        'night_log',
        'targets',
        'exposures',
        'notes'
    ];

    public function getItemByUUID($uuid) {
        return $this->get('observations/' . $uuid);
    }

    public function updateItemByUUID($uuid, $parameters) {
        return $this->putOrPatch('observations/' . $uuid . '/', $parameters);
    }

    public function deleteItemByUUID($uuid) {
        return $this->delete('observations/' . $uuid);
    }
}
