<?php

namespace App\Services\ElasticSearch\VaueObjects\Registers\ConsumerCreditProviderLicenceValueObject;

class TypeOfCreditLinksValueObject
{
    public function __construct(
        public ?string $classifierValueId,
        public ?string $classifierValueName,
    )
    {

    }
}
