<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\WrittenFormCommitment;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class WrittenFormCommitmentApiValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $merchantName = null,
        public ?string $merchantRegistrationNumber = null,
        public ?string $merchantLegalAddress = null,
        public ?string $dvsDocNumber = null,
        public ?string $registrationDate = null,
        public ?string $fileDataId = null,
        public ?string $commitmentTypeName = null,
    )
    {
    }
}
