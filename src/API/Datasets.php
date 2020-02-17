<?php

namespace Zingeon\ArcsecondLaravel\API;


class Datasets extends API
{
    public function getItemByDatafiles($uuid, $id) {
        return $this->get('datasets/' . $uuid . '/datafiles/' . $id);
    }

    public function deleteItemById($uuid, $id) {
        return $this->delete('datasets/' . $uuid . '/datafiles/' . $id);
    }

    public function getItemByOrganisation($organisation) {
        return $this->get( $organisation . '/datasets/');
    }
}
