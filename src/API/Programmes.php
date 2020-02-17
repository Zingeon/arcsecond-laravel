<?php

namespace Zingeon\ArcsecondLaravel\API;


class Programmes extends API
{
    public function getItems($params = []) {
        return $this->get('programmes/', $params);
    }

}
