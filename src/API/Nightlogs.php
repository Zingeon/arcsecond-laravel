<?php

namespace Zingeon\ArcsecondLaravel\API;


class Nightlogs extends API
{
    public $model = [
        'date',
        'start_time',
        'journal',
        'average_overhead',
        'observing_run',
        'telescope',
        'observations',
        'datasets',
        'align'
    ];

    public function getItemByUUID($uuid) {
        return $this->get('nightlogs/' . $uuid);
    }

    public function updateItemByUUID($uuid, $parameters) {
        return $this->putOrPatch('nightlogs/' . $uuid . '/', $parameters);
    }

    public function deleteItemByUUID($uuid) {
        return $this->delete('nightlogs/' . $uuid);
    }
}
