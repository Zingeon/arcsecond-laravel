<?php

namespace Zingeon\ArcsecondLaravel\API;


class Releases extends API
{
    public function getItems($params = []) {
        return $this->get('releases/', $params);
    }

}
