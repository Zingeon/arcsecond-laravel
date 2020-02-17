<?php

namespace Zingeon\ArcsecondLaravel\API;


class Publications extends API
{
    public function getItems($params = []) {
        return $this->get('publications/', $params);
    }

    public function getItemByBibCode($bibcode) {
        return $this->get('publications/' . $bibcode);
    }

}
