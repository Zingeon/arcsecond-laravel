<?php

namespace Zingeon\ArcsecondLaravel\API;


class Standardstars extends API
{
    public function getItems($params = []) {
        return $this->get('standardstars/', $params);
    }

}
