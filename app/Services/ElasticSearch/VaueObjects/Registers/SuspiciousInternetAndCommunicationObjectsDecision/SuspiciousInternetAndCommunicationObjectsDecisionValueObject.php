<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\SuspiciousInternetAndCommunicationObjectsDecision;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class SuspiciousInternetAndCommunicationObjectsDecisionValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $getUri = null,
        public ?string $dVSDocumentRegistrationDate = null,
        public ?string $decisionObjectName = null,
        public ?string $description = null,
        public ?string $dvsDocumentNumber = null,
        public ?string $violation = null,
    )
    {
    }
}
