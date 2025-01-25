<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence\Api\CreditorsRepresentedByCreditIntermediaryValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence\Api\PersonValueObject;

class CreditIntermediaryLicenceApiValueObject extends AbstractValueObject
{
    /**
     * @param CreditorsRepresentedByCreditIntermediaryValueObject[] $creditorsRepresentedByCreditIntermediary
     * @param PersonValueObject[] $boardMembers
     * @param PersonValueObject[] $employees
     */
    public function __construct(
        public ?int $id = null,
        public ?string $legalEntityName = null,
        public ?string $legalEntityRegistrationNumber = null,
        public ?string $legalEntityLegalAddressDisplayName = null,
        public ?string $legalEntityFactualAddressName = null,
        public ?string $legalEntityPhoneNumber = null,
        public ?string $legalEntityEmail = null,
        public ?string $legalEntityWebAddresses = null,
        public ?string $intermediaryCountryOfRegistrationName = null,
        public ?string $targetedPersonTypeOfMerchantName = null,
        public ?string $typesOfLicensing = null,
        public ?string $typeOfCreditIntermediationName = null,
        public ?string $eeaCountries = null,
        public ?string $competentRegistryInstitutionName = null,
        public ?string $competentRegistryInstitutionRegistrationNumber = null,
        public ?string $dateForeignInstitutionNoticeSent = null,
        public ?string $licenseStatus = null,
        public ?string $registrationNumber = null,
        public ?string $dateRegistered = null,
        public ?string $dateExcluded = null,
        public ?string $insuranceCountryOfOperationName = null,
        public ?string $dateInsuranceValidFrom = null,
        public ?string $dateInsuranceValidUntil = null,
        public ?string $insurerName = null,
        public ?string $insurancePolicyNumber = null,
        public ?array $creditorsRepresentedByCreditIntermediary = [],
        public ?array $boardMembers = [],
        public ?array $employees = [],
    )
    {
    }
}
