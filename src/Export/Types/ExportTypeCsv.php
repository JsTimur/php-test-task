<?php


namespace Src\Export\Types;


class ExportTypeCsv implements ExportTypeInterface
{
    protected $options;
    public function __construct()
    {
        // default settings
        $this->options = [
            'delimiter' => ',',
            'columns' => [
            ]
        ];
    }

    public function setOptions($options): bool
    {
        if (!is_array($options)) { return false; }
        foreach ($options as $key=>$value) {
            if (array_key_exists($key, $this->options)) {
                $this->options[$key] = $value;
            }
        }
        return true;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getExportResult(array $array = [])
    {
        /*
         * Применяем настройки и делаем нужный формат выгрузки
         */
        return serialize($array); // <- это заглушка
    }
}