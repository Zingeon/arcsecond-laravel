<?php
/**
 * Part of Arcsecond package
 *
 * Profiles API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Profiles extends API
{
    /**
     * Get a list of user profiles
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('profiles/', $queryParams);
    }

    /**
     * Get a detailed view of a user profile
     *
     * @param string $username
     * @param array $queryParams
     * @return mixed
     */
    public function getItemByUsername($username, $queryParams = []) {
        return $this->get('profiles/' . $username, $queryParams);
    }

}
