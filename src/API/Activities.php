<?php

namespace Zingeon\ArcsecondLaravel\API;


class Activities extends API
{

    public function getItems($pageSize = null, $page = null) {

        $params = $this->preparePaginationParams($pageSize, $page);

        return $this->_get('activities/', $params);
    }

    public function getItemById($id) {
        return $this->_get('activities/' . $id);
    }
}
