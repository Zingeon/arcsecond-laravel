<?php

namespace Zingeon\ArcsecondLaravel\API;


class Objects extends API
{
    public function getItems() {
        return $this->get('objects/');
    }

    public function getItemByName($name) {
        return $this->get('objects/' . $name);
    }

    public function getItemCoordinates($name) {
        return $this->get('objects/' . $name . '/coordinates/');
    }
}
