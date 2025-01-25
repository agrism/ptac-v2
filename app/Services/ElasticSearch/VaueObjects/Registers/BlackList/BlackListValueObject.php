<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\BlackList;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class BlackListValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $getUri = null,
        public ?string $merchantName = null,
        public ?string $merchantRegistrationNumber = null,
        public ?string $merchantType = null,
        public ?string $merchantLegalAddress = null,
        public ?string $description = null,
        public ?string $decisionNumber = null,
        public ?string $decisionDate = null,
        public ?string $decisionStatus = null,
        public ?string $merchantEmail = null,
    )
    {
    }
}
