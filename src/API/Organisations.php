<?php
/**
 * Part of Arcsecond package
 *
 * Organisations API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Organisations extends API
{
    public $model = [
        'name',
        'institute_name_1',
        'institute_name_2',
        'acronym',
        'website_url',
        'org_type',
        'subdomain',
        'icon',
        'banner',
        'cover'
    ];

    /**
     * Get a list of Organisations
     *
     * @param array $queryParams
     * @return mixed
     */
    public function getItems($queryParams = []) {
        return $this->get('organisations/', $queryParams);
    }

    /**
     * Get an Organisation details by subdomain
     *
     * @param string $subdomain
     * @param array $queryParams
     * @return mixed
     */
    public function getItemBySubdomain($subdomain, $queryParams = []) {
        return $this->get('organisations/' . $subdomain, $queryParams);
    }

    /**
     * Update an Organisation details by subdomain
     *
     * @param string $subdomain
     * @param array $params
     * @return mixed
     */
    public function updateItemBySubdomain($subdomain, $params) {
        return $this->putOrPatch('organisations/' . $subdomain . '/', $params);
    }
}
