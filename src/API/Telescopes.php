<?php

namespace Zingeon\ArcsecondLaravel\API;


class Telescopes extends API
{
    public function getItems($params = []) {
        return $this->get('telescopes/', $params);
    }

    public function getItemsUpdates($params = []) {
        return $this->get('telescopes/updates/', $params);
    }

    public function getItemByUUID($uuid) {
        return $this->get('telescopes/' . $uuid);
    }

}
