<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\SuspiciousInternetAndCommunicationObjectsDecision;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class SuspiciousInternetAndCommunicationObjectsDecisionApiValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $decisionObjectName = null,
        public ?string $violation = null,
        public ?string $description = null,
        public ?string $dvsDocumentRegistrationDate = null,
        public ?string $dvsDocumentNumber = null,
    )
    {
    }
}
