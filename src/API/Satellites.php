<?php

namespace Zingeon\ArcsecondLaravel\API;


class Satellites extends API
{
    public function getItems($params = []) {
        return $this->get('satellites/', $params);
    }

    public function getItemByNoradCatalogNumber($noradCatalogNumber) {
        return $this->get('satellites/' . $noradCatalogNumber);
    }

}
