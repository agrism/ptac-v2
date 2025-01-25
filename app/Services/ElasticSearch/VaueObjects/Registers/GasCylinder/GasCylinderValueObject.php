<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\GasCylinder;
use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class GasCylinderValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $getUri = null,
        public ?bool $isStationarySellingPlace = null,
        public ?bool $ptacCaseTargetedPersonAddress = null,
        public ?string $ptacCaseTargetedPersonName = null,
        public ?string $ptacCaseTargetedPersonRegNrOrPersonalCode = null,
        public ?string $registrationDate = null,
        public ?string $registrationNumber = null,
        public ?string $sellingVehicleOwner = null,
        public ?string $sellingVehicleRegistrationNumber = null,
        public ?string $stationarySellingPlaceAddressName = null,
        public ?string $stationarySellingPlaceName = null,
        public ?string $stationarySellingPlaceWorkHours = null,
    )
    {
    }
}
