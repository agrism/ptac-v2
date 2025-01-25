<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\ConsumerCreditProviderLicenceValueObject;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class ConsumerCreditProviderLicenceApiValueObject extends AbstractValueObject
{
    /**
     * @param TypeOfCreditLinksValueObject[] $typeOfCreditLinks
     * @param SellingPlaceValueObject[] $sellingPlaces
     */
    public function __construct(
        public ?int $id = null,
        public ?string $legalEntityName = null,
        public ?string $legalEntityRegistrationNumber = null,
        public ?string $legalEntityLegalAddress = null,
        public ?string $legalEntityActualAddress = null,
        public ?string $legalEntityPhoneNumber = null,
        public ?string $legalEntityEmail = null,
        public ?string $legalEntityWebAddresses = null,
        public ?string $registrationNumber = null,
        public ?string $licenceCondition = null,
        public ?string $licenceStatus = null,
        public ?string $dateEffectiveFrom = null,
        public ?string $dateSuspended = null,
        public ?string $dateAnnulled = null,
        public array $typeOfCreditLinks = [],
        public array $sellingPlaces = [],
    )
    {
    }
}
