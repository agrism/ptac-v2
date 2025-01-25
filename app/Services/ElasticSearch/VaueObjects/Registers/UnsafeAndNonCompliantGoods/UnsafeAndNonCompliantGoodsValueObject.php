<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\UnsafeAndNonCompliantGoods;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class UnsafeAndNonCompliantGoodsValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $correctiveActions = null,
        public ?string $getUri = null,
        public ?string $inconsistenciesAndRisks = null,
        public ?string $ptacItemGroup = null,
        public ?string $ptacItemInformation = null,
        public ?string $ptacItemModel = null,
        public ?string $ptacItemName = null,
        public ?string $threats = null,
    )
    {
    }
}
