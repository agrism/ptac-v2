<?php

namespace App\Services\Filter\Enums;

enum FilterTypeEnum: string
{
    case TEXT = 'text';
    case SELECT = 'select';
    case DATEPICKER = 'datepicker';
    case RANGE = 'range';
}
