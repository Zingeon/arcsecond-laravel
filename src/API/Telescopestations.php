<?php

namespace Zingeon\ArcsecondLaravel\API;


class Telescopestations extends API
{
    public function getItems() {
        return $this->get('telescopestations/');
    }
}
