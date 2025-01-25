<?php

namespace App\Services\ElasticSearch\VaueObjects\Registers\ConsumerCreditProviderLicenceValueObject;

class SellingPlaceValueObject
{
    public function __construct(
        public ?string $addressDisplayName,
    )
    {
    }
}
