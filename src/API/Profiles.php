<?php

namespace Zingeon\ArcsecondLaravel\API;


class Profiles extends API
{
    public function getItems($params = []) {
        return $this->get('profiles/', $params);
    }

    public function getItemByUsername($username) {
        return $this->get('profiles/' . $username);
    }

}
