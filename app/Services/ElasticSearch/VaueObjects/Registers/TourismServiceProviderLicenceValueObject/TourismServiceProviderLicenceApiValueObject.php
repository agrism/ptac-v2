<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\TourismServiceProviderLicenceValueObject;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class TourismServiceProviderLicenceApiValueObject extends AbstractValueObject
{
    /**
     *
     * * "cooperationPartners": [{
     * * "registrationNumber": "string",
     * * "name": "string",
     * * "legalAddressName": "string",
     * * "dateContractValidUntil": "2024-12-05T00:13:29.909Z"
     * * }],
     * *
     * * "employees": [{
     * *  "phoneNumber": "string",
     * *  "email": "string"
     * * }],
     * *
     * * "sellingPlaces": [{
     * * "addressDisplayName": "string"
     * * }],
     * *
     * * "collateralIssuers": [{
     * *  "name": "string",
     * *  "issuedAmount": 0,
     * *  "dateCollateralValidFrom": "2024-12-05T00:13:29.909Z",
     * *  "dateCollateralValidTo": "2024-12-05T00:13:29.909Z"
     * * }]
 */
    public function __construct(
        public ?int $id = null,
        public ?string $ptacCaseTargetedPersonName = null,
        public ?string $ptacCaseTargetedPersonRegistrationNumber = null,
        public ?string $ptacCaseTargetedPersonAddressDisplayName = null,
        public ?string $ptacCaseTargetedPersonAlsoKnownAs = null,
        public ?string $ptacCaseTargetedPersonPhoneNumber = null,
        public ?string $ptacCaseTargetedPersonWebAddresses = null,
        public ?string $ptacCaseTargetedPersonEmail = null,
        public ?string $registrationNumber = null,
        public ?string $licenceStatus = null,
        public ?string $dateRegistered = null,
        public ?string $dateSuspended = null,
        public ?string $dateAnnulled = null,
        public ?string $dateRenewed = null,
        public ?string $typeOfLicensingName = null,
        public ?string $typesOfMerchants = null,
        public ?string $collateralTotalSum = null,
        public ?array $cooperationPartners = [],
        public ?array $employees = [],
        public ?array $sellingPlaces = [],
        public ?array $collateralIssuers = [],
    )
    {
    }
}
