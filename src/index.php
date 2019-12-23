<?php
require '../vendor/autoload.php';

use Src\Export\ExportService;

$testDataArray = [
    [
        'id' => 123,
        'price' => 555,
        'name' => 'item1',
        'count' => 1
    ],
    [
        'id' => 1234,
        'price' => 777,
        'name' => 'item2',
        'count' => 2
    ],
    [
        'id' => 12345,
        'price' => 999,
        'name' => 'item3',
        'count' => 3
    ]
];

$export = new ExportService();

// Выводим доступные типы
var_dump($export->getTypes());

// Добавляем выгрузку в коллекцию
$export->addToCollection(
    [
        'type' => 'xls',
        'setting' => [
            'beginRowNumber' => 6,
            'columns' => [
                'id' => 2,
                'price' => 1
            ]
        ]
    ]
);
// И еще одну
$export->addToCollection(
    [
        'type' => 'csv',
        'setting' => [
            'delimiter' => '@!',
            'columns' => [
                'id' => 1,
                'name' => 1,
                'price' => 2
            ]
        ]
    ]
);

//Делаем экспорт данных в файл
var_dump($export->export($testDataArray, 'testExport'));


