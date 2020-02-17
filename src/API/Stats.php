<?php

namespace Zingeon\ArcsecondLaravel\API;


class Stats extends API
{
    public function getItems() {
        return $this->get('stats/');
    }

    public function getItemById($id) {
        return $this->get('stats/' . $id . '/');
    }

    public function getItemByOrganisation($organisation) {
        return $this->get($organisation . '/stats');
    }
}
