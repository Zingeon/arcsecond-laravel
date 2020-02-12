<?php

namespace Zingeon\ArcsecondLaravel\API;


class Objects extends API
{

    public function getItems() {
        return $this->_get('objects/');
    }

    public function getItemByName($name) {
        return $this->_get('objects/' . $name);
    }

    public function getItemCoordinatesByName($name) {
        return $this->_get('objects/' . $name . '/coordinates/');
    }
}
