<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\ConsumerCreditProviderLicenceValueObject;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class ConsumerCreditProviderLicenceValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $getUri = null,
        public ?string $legalEntityName = null,
        public ?string $legalEntityRegistrationNumber = null,
        public ?string $legalEntityLegalAddress = null,
        public ?string $legalEntityActualAddress = null,
        public ?string $legalEntityPhoneNumber = null,
        public ?string $legalEntityWebAddresses = null,
        public ?string $registrationNumber = null,
        public ?string $licenceStatus = null,
        public ?string $dateEffectiveFrom = null,
        public ?string $dateAnnulled = null,
        public ?string $dateSuspended = null,
        public ?string $legalEntityEmail = null,
        public ?string $licenceCondition = null,
    )
    {
    }
}
