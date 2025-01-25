<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\Playground;
use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class PlaygroundValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $getUri = null,
        public ?string $address = null,
        public ?string $dateExcluded = null,
        public ?string $dateOfInfoUpdate = null,
        public ?bool $isIndoor = null,
        public ?string $name = null,
        public ?string $playgroundResponsibleEmail = null,
        public ?string $playgroundResponsibleFullName = null,
        public ?string $playgroundResponsiblePhoneNumber = null,
        public ?string $posessorAddress = null,
        public ?string $posessorName = null,
        public ?string $posessorRegNrOrPersonalCode = null,
        public ?string $possessorEmail = null,
        public ?string $registrationDate = null,
        public ?string $registrationNumber = null,
    )
    {
    }
}
