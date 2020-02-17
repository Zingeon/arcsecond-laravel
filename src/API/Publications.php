<?php
/**
 * Part of Arcsecond package
 *
 * Publications API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Publications extends API
{
    /**
     * Get a Lists of Publications
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('publications/', $queryParams);
    }

    /**
     * Get a Details of a Publication by bibcode
     *
     * @param string $bibcode
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByBibCode($bibcode, $queryParams = []) {
        return $this->get('publications/' . $bibcode, $queryParams);
    }

}
