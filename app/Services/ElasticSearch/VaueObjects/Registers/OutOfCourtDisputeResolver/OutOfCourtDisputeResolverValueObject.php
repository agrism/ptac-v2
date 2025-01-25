<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\OutOfCourtDisputeResolver;
use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class OutOfCourtDisputeResolverValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $getUri = null,
        public ?string $dvsDocumentLink = null,
        public ?string $email = null,
        public ?string $legalAddressDisplayName = null,
        public ?string $name = null,
        public ?string $phoneNumber = null,
        public ?string $publicRegistryExcludedOn = null,
        public ?string $publicRegistryPublishedOn = null,
        public ?string $registrationNumber = null,
        public ?string $webAddress = null,
    )
    {
    }
}
