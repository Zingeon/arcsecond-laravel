<?php

namespace Zingeon\ArcsecondLaravel\API;


class Findingcharts extends API
{
    public function getItemByInput($input) {
        return $this->delete('findingcharts/' . $input);
    }
}
