Настройка выгрузки данных в файл.

1. возможность получить массив типов выгрузки ( например [xls, csv] ).
2. каждый тип выгрузки должен иметь свой набор настроек ( например, xls
имеет опцию с какой строки начать выгрузку, csv - какой использовать
разделитель ).
3. должна быть возможность добавлять новый тип выгрузки без изменения
основного кода
4. добавление заполненных объектов, с настройками, типов выгрузки в
коллекцию
5. пример использования, добавление заполненных объектов, формирование
файла из любого элемента коллекции объектов с настройками типов выгрузки.

входные данные для формирования файла:
1. массив с данными, структура на своё усмотрение, но не изменяемая.
2. имя файла куда нужно совершить выгрузку.

нужно сделать только бэк ( структуру, прототип ), само создание файлов,
алгоритмов выгрузки делать не надо.


Например есть тип выгрузки xls

допустим он имеет настройки такие
```
[
     'beginRowNumber' => 5,
     'columns' => [
         'name' => 1,
         'price' => 2
     ]
]
```
Выходных данных никаких нет.

Примитивами если описать:

- то типы выгрузки могут быть:
```
$exportTypes = ['xls','csv'];
```
- коллекция выгрузок
```
$exportCollection = [
     [
         'type'=>'xls',
         'setting' => [
             'beginRowNumber' => 5,
             'columns' => [
                 'name' => 1,
                 'price' => 2
             ]
         ]
     ]
];
```