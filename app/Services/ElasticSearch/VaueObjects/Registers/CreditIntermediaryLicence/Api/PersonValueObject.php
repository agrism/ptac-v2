<?php

namespace App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence\Api;

class PersonValueObject
{
    public function __construct(
        public ?string $personName = null,
        public ?string $personSurname = null,
    )
    {

    }
}
