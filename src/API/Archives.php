<?php

namespace Zingeon\ArcsecondLaravel\API;


class Archives extends API
{

    public function getItems() {
        return $this->get('archives/');
    }

    public function getItemByName($name) {
        return $this->get('archives/' . $name);
    }

    public function getESOData($params) {
        return $this->get('archives/ESO/data/', $params);
    }

    public function getESOProgrammeById($id) {
        return $this->get('archives/ESO/programmes/' . $id);
    }

    public function getGeminiData($params) {
        return $this->get('/archives/Gemini/data/', $params);
    }

    public function getGeminiProgrammes($id) {
        return $this->get('archives/Gemini/programmes/' . $id);
    }
}
