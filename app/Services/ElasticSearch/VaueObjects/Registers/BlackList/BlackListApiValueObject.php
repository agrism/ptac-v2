<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\BlackList;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class BlackListApiValueObject extends AbstractValueObject
{
    /**
     * @param int[] $fileIdLinks
     */
    public function __construct(
        public ?int $id = null,
        public ?string $merchantName = null,
        public ?string $merchantRegistrationNumber = null,
        public ?string $merchantType = null,
        public ?string $merchantLegalAddress = null,
        public ?string $merchantEmail = null,
        public ?string $description = null,
        public ?string $decisionNumber = null,
        public ?string $decisionDate = null,
        public ?string $decisionStatus = null,
        public array $fileIdLinks = [],
    )
    {
    }
}
