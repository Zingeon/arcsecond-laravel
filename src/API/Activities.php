<?php

namespace Zingeon\ArcsecondLaravel\API;


class Activities extends API
{
    protected $_uri = 'activities/';
    protected $page;
    protected $pageSize;

    public function getItems() {

        $params = [];
        if (!is_null($this->page)) {
            $params['query']['page'] = $this->page;
        }

        if (!is_null($this->pageSize)) {
            $params['query']['page_size'] = $this->pageSize;
        }

        return $this->_get($this->_uri, $params);
    }

    public function setPage($page) {
        $this->page = $page;
        return $this;
    }

    public function setPageSize($pageSize) {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function getItemById($id) {
        return $this->_get($this->_uri . $id);
    }
}
