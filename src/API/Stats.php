<?php
/**
 * Part of Arcsecond package
 *
 * Stats API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Stats extends API
{
    /**
     * Get a Stats list
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('stats/', $queryParams);
    }

    /**
     * Get Stats details by id
     *
     * @param integer $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemById($id, $queryParams = []) {
        return $this->get('stats/' . $id . '/', $queryParams);
    }

    /**
     * Get Organisation's Stats
     *
     * @param string $organisation
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByOrganisation($organisation, $queryParams = []) {
        return $this->get($organisation . '/stats', $queryParams);
    }
}
