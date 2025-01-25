<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\OutOfCourtDisputeResolver;
use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class OutOfCourtDisputeResolverApiValueObject extends AbstractValueObject
{
    /**
     * $outOfCourtDisputeResolver [{
     *      "dvsDocumentLink": "string",
     *      "disputesCategories": "string",
     *      "disputesHandled": "string",
     *      "costName": "string",
     *      "languageNames": "string",
     *      "additionalProcessInfo": "string",
     *      "disputeSolvingTypes": "string",
     *      "natureOfComplianceName": "string",
     *      "disputesRefused": "string"
     * }]
     */
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
        public ?string $registrationNumber = null,
        public ?string $legalAddressDisplayName = null,
        public ?string $webAddress = null,
        public ?string $phoneNumber = null,
        public ?string $email = null,
        public ?array $outOfCourtDisputeResolver = [],

    )
    {
    }
}

