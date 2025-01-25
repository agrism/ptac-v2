<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\PtacDecision;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class PtacDecisionApiValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,

    )
    {
    }
}
