<?php

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

    public function getItems() {
        return $this->get('organisations/');
    }

    public function getItemBySubdomain($id) {
        return $this->get('organisations/' . $id);
    }

    public function updateItemBySubdomain($id, $parameters) {
        return $this->putOrPatch('organisations/' . $id . '/', $parameters);
    }
}
