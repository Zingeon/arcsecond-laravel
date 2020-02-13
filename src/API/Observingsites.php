<?php

namespace Zingeon\ArcsecondLaravel\API;


class Observingsites extends API
{
    public function getItems($params = []) {
        return $this->get('observingsites/', $params);
    }

    public function getItemsUpdates($params) {
        return $this->get('observingsites/updates/', $params);
    }

    public function getItemByUUID($uuid) {
        return $this->get('observingsites/' . $uuid);
    }

    public function getItemImages($uuid) {
        return $this->get('observingsites/' . $uuid . '/images/');
    }

    public function getItemInterferometers($uuid) {
        return $this->get('observingsites/' . $uuid . '/interferometers/');
    }

    public function getItemTelescopes($uuid) {
        return $this->get('observingsites/' . $uuid . '/telescopes/');
    }

    public function getItemWeather($uuid) {
        return $this->get('observingsites/' . $uuid . '/weather/');
    }
}
