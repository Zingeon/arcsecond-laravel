<?php
/**
 * Part of Arcsecond package
 *
 * Satellites API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Satellites extends API
{
    /**
     * Get a Satellites list
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('satellites/', $queryParams);
    }

    /**
     * Get a a Satellite details by norad_catalog_number
     *
     * @param string $noradCatalogNumber
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByNoradCatalogNumber($noradCatalogNumber, $queryParams = []) {
        return $this->get('satellites/' . $noradCatalogNumber, $queryParams);
    }

}
