<?php

namespace Zingeon\ArcsecondLaravel\API;


class People extends API
{
    public function getItems() {
        return $this->get('people/');
    }
}
