<?php

namespace Zingeon\ArcsecondLaravel\API;


class Converters extends API
{

    public function getItemsCoordinates($ra, $dec) {
        return $this->get('converters/coordinates/ra/' . $ra . '/dec/' . $dec);
    }

    public function getItemsTimes($inputFormat, $inputValue) {
        return $this->get('converters/times/' . $inputFormat . '/' . $inputValue . '/');
    }
}
