<?php

namespace Zingeon\ArcsecondLaravel\API;


class Coordinates extends API
{
    public function getItemById($id) {
        return $this->get('coordinates/' . $id);
    }

}
