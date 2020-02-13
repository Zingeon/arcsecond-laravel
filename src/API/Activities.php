<?php

namespace Zingeon\ArcsecondLaravel\API;


class Activities extends API
{

    public function getItems($params = []) {
        return $this->get('activities/', $params);
    }

    public function getItemById($id) {
        return $this->get('activities/' . $id);
    }
}
