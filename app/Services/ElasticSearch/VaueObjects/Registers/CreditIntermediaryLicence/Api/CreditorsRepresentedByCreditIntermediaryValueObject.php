<?php

namespace App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence\Api;

class CreditorsRepresentedByCreditIntermediaryValueObject
{
    public function __construct(
        public ?string $name = null,
        public ?string $registrationNumber = null,
        public ?string $legalAddress = null,
        public ?string $phoneNumber = null,
    )
    {

    }
}
