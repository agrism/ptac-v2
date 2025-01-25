<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\Playground;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class PlaygroundApiValueObject extends AbstractValueObject
{
    /**
     * "equipment": [{
     *      "equipmentTypeName": "string",
     *      "identifier": "string",
     *      "dateInstalled": "2024-12-04T23:23:25.002Z",
     *      "notes": "string"
     * }]
     */
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
        public ?string $address = null,
        public ?bool $isIndoor = null,
        public ?string $possessorName = null,
        public ?string $possessorRegNrOrPersonalCode = null,
        public ?string $possessorAddress = null,
        public ?string $possessorEmail = null,
        public ?string $registrationNumber = null,
        public ?string $dateRegistered = null,
        public ?string $dateExcluded = null,
        public ?string $dateOfInfoUpdate = null,
        public ?string $playgroundResponsibleFullName = null,
        public ?string $phoneNumber = null,
        public ?string $email = null,
        public ?array $equipment = [],
    )
    {
    }
}
