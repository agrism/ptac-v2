<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\CommissionDecision;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class CommissionDecisionValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $getUri = null,
        public ?string $decisionNumber = null,
        public ?string $publicationOrAcceptanceDate = null,
        public ?string $description = null,
        public ?string $decisionStatus = null,
    )
    {
    }
}
