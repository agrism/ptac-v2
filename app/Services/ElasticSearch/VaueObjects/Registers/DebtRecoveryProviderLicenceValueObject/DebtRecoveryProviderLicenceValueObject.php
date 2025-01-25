<?php
namespace App\Services\ElasticSearch\VaueObjects\Registers\DebtRecoveryProviderLicenceValueObject;

use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;

class DebtRecoveryProviderLicenceValueObject extends AbstractValueObject
{
    public function __construct(
        public ?int $id = null,
        public ?string $dateAnnulled = null,
        public ?string $dateEffectiveFrom = null,
        public ?string $dateEffectiveUntil = null,
        public ?string $dateSuspended = null,
        public ?string $licenceStatus = null,
        public ?string $merchantEmail = null,
        public ?string $merchantIsLegalEntity = null,
        public ?string $merchantLegalAddress = null,
        public ?string $merchantName = null,
        public ?string $merchantPersonalCodeOrRegistrationNumber = null,
        public ?string $merchantPhoneNumber = null,
        public ?string $merchantServiceAddress = null,
        public ?string $merchantWebAddress = null,
        public ?string $reasonOfAnnulment = null,
        public ?string $reasonOfSuspension = null,
        public ?string $registrationNumber = null,
    )
    {
    }
}
