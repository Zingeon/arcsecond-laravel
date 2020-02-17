<?php
/**
 * Part of Arcsecond package
 *
 * Converters API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Converters extends API
{

    /**
     * Get Converter coordinates
     *
     * @param string $ra
     * @param string $dec
     * @param array $queryParams
     * @return mixed
     */
    public function getItemsCoordinates($ra, $dec, $queryParams = []) {
        return $this->get('converters/coordinates/ra/' . $ra . '/dec/' . $dec, $queryParams);
    }

    /**
     * Get Converter times
     *
     * @param string $inputFormat
     * @param string $inputValue
     * @param array $queryParams
     * @return mixed
     */
    public function getItemsTimes($inputFormat, $inputValue, $queryParams = []) {
        return $this->get('converters/times/' . $inputFormat . '/' . $inputValue . '/', $queryParams);
    }
}
