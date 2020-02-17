<?php

namespace Zingeon\ArcsecondLaravel\API;


class Datafiles extends API
{
    public function getItemById($id) {
        return $this->get('datafiles/' . $id);
    }

    public function deleteItemById($id) {
        return $this->delete('datafiles/' . $id);
    }

    public function getItemByOrganisation($organisation) {
        return $this->get( $organisation . '/datafiles/');
    }
}
