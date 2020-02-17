<?php
/**
 * Part of Arcsecond package
 *
 * Datafiles API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Datafiles extends API
{
    /**
     * Get Datafiles by id
     *
     * @param integer $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemById($id, $queryParams = []) {
        return $this->get('datafiles/' . $id, $queryParams);
    }

    /**
     * Delete Datafiles by id
     *
     * @param integer $id
     * @return mixed
     */
    public function deleteItemById($id) {
        return $this->delete('datafiles/' . $id);
    }

    /**
     * Get Datafiles by organisation
     *
     * @param string $organisation
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByOrganisation($organisation, $queryParams = []) {
        return $this->get( $organisation . '/datafiles/', $queryParams);
    }
}
