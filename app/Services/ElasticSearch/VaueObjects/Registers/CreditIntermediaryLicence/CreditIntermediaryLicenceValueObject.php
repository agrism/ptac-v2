<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class CreditIntermediaryLicenceValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $competentRegistryInstitutionName = null,
        public ?string $competentRegistryInstitutionRegistrationNumber = null,
        public ?string $dateRegistered = null,
        public ?string $dateExcluded = null,
        public ?string $dateForeignInstitutionNoticeSent = null,
        public ?string $dateInsuranceValidFrom = null,
        public ?string $dateInsuranceValidUntil = null,
        public ?string $eEACountries = null,
        public ?string $insuranceCountryOfOperationName = null,
        public ?string $insurancePolicyNumber = null,
        public ?string $insurerName = null,
        public ?string $intermediaryCountryOfRegistrationName = null,
        public ?string $legalEntityEmail = null,
        public ?string $legalEntityFactualAddressName = null,
        public ?string $legalEntityLegalAddressDisplayName = null,
        public ?string $legalEntityName = null,
        public ?string $legalEntityPhoneNumber = null,
        public ?string $legalEntityRegistrationNumber = null,
        public ?string $legalEntityWebAddresses = null,
        public ?string $licenseStatus = null,
        public ?string $registrationNumber = null,
        public ?string $targetedPersonTypeOfMerchantName = null,
        public ?string $typeOfCreditIntermediationName = null,
        public ?string $typesOfLicensing = null,
    )
    {
    }
}
