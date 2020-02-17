<?php
/**
 * Part of Arcsecond package
 *
 * Catalogues API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Catalogues extends API
{

    /**
     * Get a List of Catalogues
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('catalogues/', $queryParams);
    }

    /**
     * Get a Detail of a Catalogue by id
     *
     * @param integer $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemById($id, $queryParams = []) {
        return $this->get('catalogues/' . $id, $queryParams);
    }

    /**
     * Get a List of Tables of a given Catalogue
     *
     * @param integer $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemTables($id, $queryParams = []) {
        return $this->get('catalogues/' . $id . '/tables/', $queryParams);
    }

    /**
     * Get a Detail of a Table for a given Catalogue
     *
     * @param integer $id
     * @param string $index
     * @param array $queryParams
     * @return mixed
     */
    public function getItemTableByIndex($id, $index, $queryParams = []) {
        return $this->get('catalogues/' . $id . '/tables/' . $index, $queryParams);
    }

    /**
     * Get a List of Rows of a Catalogue Table
     *
     * @param string $id
     * @param string $index
     * @param array $queryParams
     * @return mixed
     */
    public function getItemTableRows($id, $index, $queryParams = []) {
        return $this->get('catalogues/' . $id . '/tables/' . $index . '/rows/', $queryParams);
    }
}
