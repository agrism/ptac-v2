<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\WrittenFormCommitment;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class WrittenFormCommitmentValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $getUri = null,
        public ?string $merchantName = null,
        public ?string $merchantRegistrationNumber = null,
        public ?string $merchantLegalAddress = null,
        public ?string $registrationDate = null,
        public ?string $dVSDocNumber = null,
        public ?string $commitmentType = null,
    )
    {
    }
}
