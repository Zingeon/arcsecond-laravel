<?php
/**
 * Part of Arcsecond package
 *
 * Findingcharts API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Findingcharts extends API
{

    /**
     * Get Findingcharts by input
     *
     * @param string $input
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByInput($input, $queryParams = []) {
        return $this->get('findingcharts/' . $input, $queryParams);
    }
}
