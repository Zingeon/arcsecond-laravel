<?php
/**
 * Part of Arcsecond package
 *
 * Telegrams API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Telegrams extends API
{
    /**
     * Get a list of Telegrams
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('telegrams/ATel/', $queryParams);
    }

    /**
     * Get Telegram details by id
     *
     * @param string $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemById($id, $queryParams = []) {
        return $this->get('telegrams/ATel/' . $id, $queryParams);
    }

    /**
     * Get Telegram circulars by id
     *
     * @param string $id
     * @param array $queryParams
     * @return mixed
     */
    public function getItemCirculars($id, $queryParams = []) {
        return $this->get('telegrams/GCN/Circulars/' . $id, $queryParams);
    }
}
