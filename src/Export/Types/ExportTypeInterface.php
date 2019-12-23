<?php

namespace Src\Export\Types;

interface ExportTypeInterface
{
    public function setOptions($options):bool;

    public function getOptions():array;

    public function getExportResult();
}