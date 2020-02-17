<?php

namespace Zingeon\ArcsecondLaravel\API;


class Telegrams extends API
{
    public function getItems() {
        return $this->get('telegrams/ATel/');
    }

    public function getItemById($id) {
        return $this->get('telegrams/ATel/' . $id);
    }

    public function getItemCirculars($id) {
        return $this->get('telegrams/GCN/Circulars/' . $id );
    }
}
