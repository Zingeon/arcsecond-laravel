<?php

namespace Zingeon\ArcsecondLaravel\API;


class Exoplanets extends API
{

    public function getItems($params = []) {
        return $this->get('exoplanets/', $params);
    }

    public function getItemByName($name) {
        return $this->get('exoplanets/' . $name);
    }

    public function getItemCoordinates($name) {
        return $this->get('exoplanets/' . $name . '/coordinates/');
    }
}
