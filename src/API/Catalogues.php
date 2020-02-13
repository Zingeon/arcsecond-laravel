<?php

namespace Zingeon\ArcsecondLaravel\API;


class Catalogues extends API
{

    public function getItems() {
        return $this->get('catalogues/');
    }

    public function getItemById($id) {
        return $this->get('catalogues/' . $id);
    }

    public function getItemTables($id) {
        return $this->get('catalogues/' . $id . '/tables/');
    }

    public function getItemTableByIndex($id, $index) {
        return $this->get('catalogues/' . $id . '/tables/' . $index);
    }

    public function getItemTableRows($id, $index, $pageSize = null, $page = null) {

        $params = $this->preparePaginationParams($pageSize, $page);

        return $this->get('catalogues/' . $id . '/tables/' . $index . '/rows/', $params);
    }
}
