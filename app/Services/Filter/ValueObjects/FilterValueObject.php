<?php

namespace App\Services\Filter\ValueObjects;

use App\Services\Filter\Enums\FilterTypeEnum;

class FilterValueObject
{
    public function __construct(
        public FilterTypeEnum $type,
        public ?string $label = null,
        public ?string $name = null,
        public ?string $value = null,
        public ?string $value2 = null,
        public ?string $class = null,
        public ?string $wrapperClass = null,
        public ?string $hint = null,
        public ?string $start = null,
        public ?string $name2 = null,
        public array $dropdown = []
    )
    {
    }

    public function export(): array
    {
        return [
            'label' => $this->label,
            'name' => $this->name,
            'value' => $this->value,
            'value2' => $this->value2,
            'class' => $this->class,
            'wrapperClass' => $this->wrapperClass,
            'type' => $this->type->value,
            'hint' => $this->hint,
            'dropdown' => $this->dropdown,
            'name2' => $this->name2,
        ];
    }
}
