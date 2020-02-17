<?php
/**
 * Part of Arcsecond package
 *
 * Datasets API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Datasets extends API
{
    /**
     * Get Datasets by UUID and datafiles id
     *
     * @param integer $uuid
     * @param string $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByDatafiles($uuid, $id, $queryParams = []) {
        return $this->get('datasets/' . $uuid . '/datafiles/' . $id, $queryParams);
    }

    /**
     * Delete Datasets by UUID and datafiles id
     *
     * @param integer $uuid
     * @param string $id
     * @return mixed
     */
    public function deleteItemById($uuid, $id) {
        return $this->delete('datasets/' . $uuid . '/datafiles/' . $id);
    }

    /**
     * Get The list of datasets of an organisation
     *
     * @param string $organisation
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByOrganisation($organisation, $queryParams = []) {
        return $this->get( $organisation . '/datasets/', $queryParams);
    }
}
