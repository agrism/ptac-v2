<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\CommissionDecision;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class CommissionDecisionApiValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $decisionNumber = null,
        public ?string $publicationOrAcceptanceDate = null,
        public ?string $description = null,
        public ?string $decisionStatus = null,
        public ?string $fileDataId = null,
    )
    {
    }
}
