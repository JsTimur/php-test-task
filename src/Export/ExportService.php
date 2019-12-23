<?php


namespace Src\Export;


class ExportService extends AbstractExportCollection
{
    /*
     * Укажите новый тип выгрузки и реализующий класс
     */
    public $types = [
        'csv' => Types\ExportTypeCsv::class,
        'xls' => Types\ExportTypeXls::class,
    ];

    public function __construct()
    {
        foreach ($this->types as $key => $type) {
             $this->types[$key] = new $type();
        }
    }

    public function getTypes() {
        return array_keys($this->types);
    }

    public function export($dataArray, $exportFileName) {
        if (count($this->collection) === 0) {
            return 'Ошибка. Нет коллекций. Создайте коллекцию с настройками выгрузки';
        }
        $availableTypes = $this->getTypes();
        foreach ($this->collection as $collection) {
            if (!in_array($collection['type'], $availableTypes, true)) {
                return 'Ошибка. Тип '.$collection['type'].' не доступен в программе.';
            }
            $this->types[$collection['type']]->setOptions($collection['setting']);
            var_dump($this->types[$collection['type']]->getOptions());
            $resultData = $this->types[$collection['type']]->getExportResult($dataArray);
            // далее сохранить $resultData в файл с именем $exportFileName и расширением $collection->type
        }
        return 'Успешная выгрузка.';
    }
}