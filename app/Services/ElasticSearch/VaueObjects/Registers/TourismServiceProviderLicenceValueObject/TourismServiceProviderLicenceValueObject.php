<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\TourismServiceProviderLicenceValueObject;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class TourismServiceProviderLicenceValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $getUri = null,
        public ?string $collateralTotalSum = null,
        public ?string $dateAnnulled = null,
        public ?string $dateRegistered = null,
        public ?string $dateRenewed = null,
        public ?string $dateSuspended = null,
        public ?string $licenceStatus = null,
        public ?string $ptacCaseTargetedPersonAddressDisplayName = null,
        public ?string $ptacCaseTargetedPersonAlsoKnownAs = null,
        public ?string $ptacCaseTargetedPersonEmail = null,
        public ?string $ptacCaseTargetedPersonName = null,
        public ?string $ptacCaseTargetedPersonPhoneNumber = null,
        public ?string $ptacCaseTargetedPersonRegistrationNumber = null,
        public ?string $ptacCaseTargetedPersonRegistrationYear = null,
        public ?string $ptacCaseTargetedPersonWebAddress = null,
        public ?string $registrationNumber = null,
        public ?string $typeOfLicensing = null,
        public ?string $typeOfMerchants = null,
    )
    {
    }
}
