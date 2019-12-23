<?php


namespace Src\Export;


class AbstractExportCollection
{
    public $collection = [];

    public function addToCollection($item)
    {
        $this->collection[] = $item;
    }

    public function unsetCollection() {
        $this->collection = [];
    }

    public function getCollection() {
        return $this->collection;
    }

    public function loadCollection() {
        // загрузка из файла
    }
    public function saveCollection() {
        // сохранение в файл
    }
}