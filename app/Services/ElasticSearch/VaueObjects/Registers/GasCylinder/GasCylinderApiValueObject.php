<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\GasCylinder;
use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class GasCylinderApiValueObject extends AbstractValueObject
{
    /**
     * "responsiblePersonLinks": [{
     *      "responsibleLegalEntityName": "string",
     *      "typeOfGasName": "string",
     *      "cylinderVolume": "string"
     * }]
     */
    public function __construct(
        public ?int $id = null,
        public ?string $ptacCaseTargetedPersonName = null,
        public ?string $ptacCaseTargetedPersonRegNrOrPersonalCode = null,
        public ?string $ptacCaseTargetedPersonAddress = null,
        public ?string $registrationNumber = null,
        public ?string $registrationDate = null,
        public ?bool $isStationarySellingPlace = null,
        public ?string $sellingPlaceName = null,
        public ?string $sellingPlaceAddressDisplayName = null,
        public ?string $sellingPlaceWorkHours = null,

        public ?string $vehicleOwner = null,
        public ?string $vehicleRegistrationNumber = null,
        public ?array $responsiblePersonLinks = [],
    )
    {
    }
}
