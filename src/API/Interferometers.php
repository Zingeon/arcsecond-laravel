<?php

namespace Zingeon\ArcsecondLaravel\API;


class Interferometers extends API
{
    public function getItems() {
        return $this->get('interferometers/');
    }

    public function getItemByUUID($uuid) {
        return $this->get('interferometers/' . $uuid);
    }
}
