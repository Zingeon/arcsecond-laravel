<?php

namespace Zingeon\ArcsecondLaravel\API;


class Archives extends API
{

    public function getItems() {
        return $this->_get('archives/');
    }

    public function getItemByName($name) {
        return $this->_get('archives/' . $name);
    }

    public function getESOData($pageSize = null, $page = null) {

        $params = $this->preparePaginationParams($pageSize, $page);

        return $this->_get('archives/ESO/data/', $params);
    }

    public function getESOProgrammeById($id) {
        return $this->_get('archives/ESO/programmes/' . $id);
    }

    public function getGeminiData($pageSize = null, $page = null) {

        $params = $this->preparePaginationParams($pageSize, $page);

        return $this->_get('/archives/Gemini/data/', $params);
    }

    public function getGeminiProgrammes($id) {
        return $this->_get('archives/Gemini/programmes/' . $id);
    }
}
