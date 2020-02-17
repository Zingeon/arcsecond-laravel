<?php

namespace Zingeon\ArcsecondLaravel\API;


class Instruments extends API
{
    public function getItems($params = []) {
        return $this->get('instruments/', $params);
    }

    public function getItemByUUID($uuid) {
        return $this->get('instruments/' . $uuid);
    }

}
