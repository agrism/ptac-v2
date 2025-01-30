<?php

namespace App\Services\RegisterService\Enums;

use App\Services\ElasticSearch\RegisterInterface;
use App\Services\ElasticSearch\Registers\BlacklistEntry;
use App\Services\ElasticSearch\Registers\CommissionDecision;
use App\Services\ElasticSearch\Registers\ConsumerCreditProviderLicence;
use App\Services\ElasticSearch\Registers\CreditIntermediaryLicence;
use App\Services\ElasticSearch\Registers\DebtRecoveryProviderLicence;
use App\Services\ElasticSearch\Registers\FakeResolver;
use App\Services\ElasticSearch\Registers\GasCylinder;
use App\Services\ElasticSearch\Registers\OutOfCourtDisputeResolver;
use App\Services\ElasticSearch\Registers\Playground;
use App\Services\ElasticSearch\Registers\PtacDecisions;
use App\Services\ElasticSearch\Registers\SuspiciousInternetAndCommunicationObjectsDecision;
use App\Services\ElasticSearch\Registers\TourismServiceProviderLicence;
use App\Services\ElasticSearch\Registers\UnsafeAndNonCompliantGoods;
use App\Services\ElasticSearch\Registers\WrittenFormCommitment;
use App\Services\ElasticSearch\VaueObjects\Registers\BlackList\BlackListApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\BlackList\BlackListValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\CommissionDecision\CommissionDecisionApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\CommissionDecision\CommissionDecisionValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\ConsumerCreditProviderLicenceValueObject\ConsumerCreditProviderLicenceApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\ConsumerCreditProviderLicenceValueObject\ConsumerCreditProviderLicenceValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence\CreditIntermediaryLicenceApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\CreditIntermediaryLicence\CreditIntermediaryLicenceValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\DebtRecoveryProviderLicenceValueObject\DebtRecoveryProviderLicenceValueApiObject;
use App\Services\ElasticSearch\VaueObjects\Registers\DebtRecoveryProviderLicenceValueObject\DebtRecoveryProviderLicenceValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\GasCylinder\GasCylinderApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\GasCylinder\GasCylinderValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\OutOfCourtDisputeResolver\OutOfCourtDisputeResolverApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\OutOfCourtDisputeResolver\OutOfCourtDisputeResolverValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\Playground\PlaygroundApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\Playground\PlaygroundValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\PtacDecision\PtacDecisionApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\PtacDecision\PtacDecisionValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\SuspiciousInternetAndCommunicationObjectsDecision\SuspiciousInternetAndCommunicationObjectsDecisionApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\SuspiciousInternetAndCommunicationObjectsDecision\SuspiciousInternetAndCommunicationObjectsDecisionValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\TourismServiceProviderLicenceValueObject\TourismServiceProviderLicenceApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\TourismServiceProviderLicenceValueObject\TourismServiceProviderLicenceValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\UnsafeAndNonCompliantGoods\UnsafeAndNonCompliantGoodsApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\UnsafeAndNonCompliantGoods\UnsafeAndNonCompliantGoodsValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\WrittenFormCommitment\WrittenFormCommitmentApiValueObject;
use App\Services\ElasticSearch\VaueObjects\Registers\WrittenFormCommitment\WrittenFormCommitmentValueObject;

enum RegisterEnum: string
{
    case BLACK_LIST = 'black-list';
    case COMMISSION_DECISIONS = 'commission-decisions';
    case CONSUMER_CREDIT_PROVIDER_LICENCES = 'consumer-credit-provider-licences';
    case CREDIT_INTERMEDIARY_LICENCES = 'credit-intermediary-licences';
    case DEBT_RECOVERY_PROVIDER_LICENCES = 'debt-recovery-provider-licences';
    case GAS_CYLINDER = 'gas-cylinder';
    case OUT_OF_COURT_DISPUTE_RESOLVER = 'out-of-court-dispute-resolver';
    case PLAYGROUND = 'playground';
    case PTAC_DECISIONS = 'ptac-decisions';
    case SUSPICIOUS_INTERNET_AND_COMMUNICATION = 'suspicious-internet-and-communication';
    case TOURISM_SERVICE_PROVIDER_LICENCES = 'tourism-service-provider-licences';
    case UNSAFE_AND_NON_COMPLIANT_GOODS = 'unsafe-and-non-compliant-goods';
    case WRITTEN_FORM_COMMITMENT = 'written-form-commitment';

    public function title(): string
    {
        return match($this){
            self::BLACK_LIST => 'Melnais saraksts',
            self::COMMISSION_DECISIONS => 'Patērētāju strīdu risināšanas komisijas lēmumi',
            self::CONSUMER_CREDIT_PROVIDER_LICENCES => 'Patērētāju kreditēšanas pakalpojumu sniedzēji',
            self::CREDIT_INTERMEDIARY_LICENCES => 'Hipotekāro kredītu starpnieki un to pārstāvji',
            self::DEBT_RECOVERY_PROVIDER_LICENCES => 'Parāda atgūšanas pakalpojumu sniedzēji',
            self::GAS_CYLINDER => 'Gāzes balonu tirdzniecības vietas',
            self::OUT_OF_COURT_DISPUTE_RESOLVER => 'Ārpustiesas patērētāju strīdu risinātāji',
            self::PLAYGROUND => 'Publiskie spēļu laukumi',
            self::PTAC_DECISIONS => 'PTAC lēmumi',
            self::SUSPICIOUS_INTERNET_AND_COMMUNICATION => 'Aizdomīgie interneta un saziņas objekti',
            self::TOURISM_SERVICE_PROVIDER_LICENCES => 'Tūrisma pakalpojumu sniedzēji',
            self::UNSAFE_AND_NON_COMPLIANT_GOODS => 'Nedrošās un neatbilstošās preces',
            self::WRITTEN_FORM_COMMITMENT => 'Rakstveida apņemšanās',
        };
    }

    /**
     * @return self[]
     */
    public static function sorted(): array
    {
        return collect(self::cases())->sortBy(function($item){
            return $item->order();
        })->toArray();
    }

    public function getIconElement(): string
    {
        return match($this){
            self::BLACK_LIST => '<i class="icon icon_collection fa-solid fa-triangle-exclamation"></i>',
            self::COMMISSION_DECISIONS => '<i class="icon icon_collection fa-solid fa-handshake-angle"></i>',
            self::CONSUMER_CREDIT_PROVIDER_LICENCES => '<i class="icon icon_collection fa-solid fa-comments-dollar"></i>',
            self::CREDIT_INTERMEDIARY_LICENCES => '<i class="icon icon_collection fa-solid fa-hand-holding-dollar"></i>',
            self::DEBT_RECOVERY_PROVIDER_LICENCES => '<i class="icon icon_collection fa-solid fa-piggy-bank"></i>',
            self::GAS_CYLINDER => '<i class="icon icon_collection fa-solid fa-fire-flame-simple"></i>',
            self::OUT_OF_COURT_DISPUTE_RESOLVER => '<i class="icon icon_collection fa-solid fa-user-tie"></i>',
            self::PLAYGROUND => '<i class="icon icon_collection fa-brands fa-fort-awesome"></i>',
            self::PTAC_DECISIONS => '<i class="icon icon_collection fa-solid fa-pen-fancy"></i>',
            self::SUSPICIOUS_INTERNET_AND_COMMUNICATION => '<i class="icon icon_collection fa-solid fa-triangle-exclamation"></i>',
            self::TOURISM_SERVICE_PROVIDER_LICENCES => '<i class="icon icon_collection fa-solid fa-suitcase-rolling"></i>',
            self::UNSAFE_AND_NON_COMPLIANT_GOODS => '<i class="icon icon_collection fa-solid fa-book-skull"></i>',
            self::WRITTEN_FORM_COMMITMENT => '<i class="icon icon_collection fa-solid fa-hand"></i>',
            default => '',
        };
    }

    public function getRegisterInstance(): RegisterInterface
    {
        return match ($this){
            self::OUT_OF_COURT_DISPUTE_RESOLVER => app(OutOfCourtDisputeResolver::class),
            self::BLACK_LIST => app(BlacklistEntry::class),
            self::COMMISSION_DECISIONS => app(CommissionDecision::class),
            self::CONSUMER_CREDIT_PROVIDER_LICENCES => app(ConsumerCreditProviderLicence::class),
            self::CREDIT_INTERMEDIARY_LICENCES => app(CreditIntermediaryLicence::class),
            self::DEBT_RECOVERY_PROVIDER_LICENCES => app(DebtRecoveryProviderLicence::class),
            self::GAS_CYLINDER => app(GasCylinder::class),
            self::PLAYGROUND => app(Playground::class),
            self::SUSPICIOUS_INTERNET_AND_COMMUNICATION => app(SuspiciousInternetAndCommunicationObjectsDecision::class),
            self::TOURISM_SERVICE_PROVIDER_LICENCES => app(TourismServiceProviderLicence::class),
            self::UNSAFE_AND_NON_COMPLIANT_GOODS => app(UnsafeAndNonCompliantGoods::class),
            self::WRITTEN_FORM_COMMITMENT => app(WrittenFormCommitment::class),
            self::PTAC_DECISIONS => app(PtacDecisions::class),
        };
    }

    public function getValueObject(array $data): object
    {
        return match ($this){
            self::OUT_OF_COURT_DISPUTE_RESOLVER => $this->fillValueObject(OutOfCourtDisputeResolverValueObject::class, $data),
            self::DEBT_RECOVERY_PROVIDER_LICENCES => $this->fillValueObject(DebtRecoveryProviderLicenceValueObject::class, $data),
            self::CONSUMER_CREDIT_PROVIDER_LICENCES => $this->fillValueObject(ConsumerCreditProviderLicenceValueObject::class, $data),
            self::TOURISM_SERVICE_PROVIDER_LICENCES => $this->fillValueObject(TourismServiceProviderLicenceValueObject::class, $data),
            self::CREDIT_INTERMEDIARY_LICENCES => $this->fillValueObject(CreditIntermediaryLicenceValueObject::class, $data),
            self::PLAYGROUND => $this->fillValueObject(PlaygroundValueObject::class, $data),
            self::GAS_CYLINDER => $this->fillValueObject(GasCylinderValueObject::class, $data),
            self::SUSPICIOUS_INTERNET_AND_COMMUNICATION => $this->fillValueObject(SuspiciousInternetAndCommunicationObjectsDecisionValueObject::class, $data),
            self::UNSAFE_AND_NON_COMPLIANT_GOODS => $this->fillValueObject(UnsafeAndNonCompliantGoodsValueObject::class, $data),
            self::WRITTEN_FORM_COMMITMENT => $this->fillValueObject(WrittenFormCommitmentValueObject::class, $data),
            self::COMMISSION_DECISIONS => $this->fillValueObject(CommissionDecisionValueObject::class, $data),
            self::BLACK_LIST => $this->fillValueObject(BlackListValueObject::class, $data),
            self::PTAC_DECISIONS => $this->fillValueObject(PtacDecisionValueObject::class, $data),
            default => $this->fillValueObject(FakeResolver::class),
        };
    }

    public function getImage(): string
    {
        return match ($this){
            self::OUT_OF_COURT_DISPUTE_RESOLVER => 'arpustiesas-pateretaju-stridu-risinataji5.jpg',
            self::DEBT_RECOVERY_PROVIDER_LICENCES => 'parada-atgusanas-paksniedzeji5.jpg',
            self::CONSUMER_CREDIT_PROVIDER_LICENCES => 'pateretaju-kreditesanas-pak-sniedzeji5.jpg',
            self::TOURISM_SERVICE_PROVIDER_LICENCES => 'turisma-pakalpojumi9.jpg',
            self::CREDIT_INTERMEDIARY_LICENCES => 'hipotekaro-kreditu-starpnieki-un-parstavji5.jpg',
            self::PLAYGROUND => 'spelu-laukumi5.jpg',
            self::GAS_CYLINDER => 'gazesbaloni.jpg',
            self::SUSPICIOUS_INTERNET_AND_COMMUNICATION => 'melnais-saraksts9.jpg',
            self::UNSAFE_AND_NON_COMPLIANT_GOODS => 'nedrosas-preces5.jpg',
            self::WRITTEN_FORM_COMMITMENT => 'rakstveida-apnemsanas5.jpg',
            self::COMMISSION_DECISIONS => '9pateretstridriskomislem5.jpg',
            self::BLACK_LIST => 'melnais-saraksts9.jpg',
            self::PTAC_DECISIONS => 'ptac-lemumi5.jpg',
            default => '',
        };
    }

    public function getDescription(): string
    {
        return match ($this){
            self::OUT_OF_COURT_DISPUTE_RESOLVER => 'Ārpustiesas patērētāju strīdu risinātāji',
            self::DEBT_RECOVERY_PROVIDER_LICENCES => 'Parāda atgūšanas pakalpojuma sniedzēji, kuri saņēmuši licenci parāda atgūšanas pakalpojuma sniegšanai.',
            self::CONSUMER_CREDIT_PROVIDER_LICENCES => 'Kapitālsabiedrības, kuras saņēmušas licenci patērētāju kreditēšanas pakalpojumu sniegšanai.',
            self::TOURISM_SERVICE_PROVIDER_LICENCES => 'Tūrisma pakalpojumu sniedzēji, kuri ir reģistrēti un/ vai saņēmuši licenci komplekso tūrisma pakalpojumu sniegšanai.',
            self::CREDIT_INTERMEDIARY_LICENCES => 'Informācija par reģistrētiem hipotekāriem kredītu starpniekiem un to pārstāvjiem.',
            self::PLAYGROUND => 'PTAC reģistrēti publiskie spēļu un rekreācijas laukumi',
            self::GAS_CYLINDER => 'Gāzes balonu tirdzniecības vietu reģistrā reģistrēto tirdzniecības vietu publiskā datubāze',
            self::SUSPICIOUS_INTERNET_AND_COMMUNICATION => 'Datubāzē tiek ietverta informācija, lai sabiedrību brīdinātu par aizdomīgiem interneta objektiem, lai preventīvi brīdinātu sabiedrību un novērstu iespējamu kaitējumu patērētājiem.',
            self::UNSAFE_AND_NON_COMPLIANT_GOODS => 'PTAC atklātas nedrošas un neatbilstošas preces, t.sk. būvizstrādājumi.',
            self::WRITTEN_FORM_COMMITMENT => 'PTAC saņemtās komersantu rakstveida apņemšanās par labprātīgu patērētāju kolektīvo interešu pārkāpumu novēršanu.',
            self::COMMISSION_DECISIONS => 'Anonimizēti Patērētāju strīdu risināšanas  komisijas lēmumi.',
            self::BLACK_LIST => 'Komersanti, kas nav izpildījuši Patērētāju strīdu risināšanas komisijas lēmumus.',
            self::PTAC_DECISIONS => 'PTAC izdotie administratīvie akti patērētāju kolektīvo interešu lietās.',
            default => '',
        };
    }

    public function getFirstLevelViewFilePath(): string
    {
        return sprintf('registers.%s.index', $this->value);
    }

    public function getSecondLevelViewFilePath(): string
    {
        return sprintf('registers.%s.show', $this->value);
    }

    protected function order(): int
    {
        return match($this) {
            self::DEBT_RECOVERY_PROVIDER_LICENCES => 0,
            self::CONSUMER_CREDIT_PROVIDER_LICENCES => 1,
            self::CREDIT_INTERMEDIARY_LICENCES => 2,
            self::PLAYGROUND => 3,
            self::GAS_CYLINDER => 4,
            self::UNSAFE_AND_NON_COMPLIANT_GOODS => 5,
            self::WRITTEN_FORM_COMMITMENT => 6,
            self::PTAC_DECISIONS => 7,
            self::OUT_OF_COURT_DISPUTE_RESOLVER => 8,
            self::COMMISSION_DECISIONS => 9,
            self::BLACK_LIST => 10,
            self::SUSPICIOUS_INTERNET_AND_COMMUNICATION => 11,
            self::TOURISM_SERVICE_PROVIDER_LICENCES => 12,

        };
    }

    protected function fillValueObject(string $class, array $data = []): object
    {
        $obj = new $class;
        foreach ($data as $key => $value){
            if(!property_exists($obj, $key)){
                continue;
            }
            $obj->$key = $value;
        }

        $obj->setElkRawData($data);
        return $obj;
    }

    public function getApiValueObject(array $data): object
    {
        return match ($this){
            self::DEBT_RECOVERY_PROVIDER_LICENCES => $this->fillValueObject(DebtRecoveryProviderLicenceValueApiObject::class, $data),
            self::CONSUMER_CREDIT_PROVIDER_LICENCES => $this->fillValueObject(ConsumerCreditProviderLicenceApiValueObject::class, $data),
            self::CREDIT_INTERMEDIARY_LICENCES => $this->fillValueObject(CreditIntermediaryLicenceApiValueObject::class, $data),
            self::TOURISM_SERVICE_PROVIDER_LICENCES => $this->fillValueObject(TourismServiceProviderLicenceApiValueObject::class, $data),
            self::PLAYGROUND => $this->fillValueObject(PlaygroundApiValueObject::class, $data),
            self::GAS_CYLINDER => $this->fillValueObject(GasCylinderApiValueObject::class, $data),
            self::COMMISSION_DECISIONS => $this->fillValueObject(CommissionDecisionApiValueObject::class, $data),
            self::UNSAFE_AND_NON_COMPLIANT_GOODS => $this->fillValueObject(UnsafeAndNonCompliantGoodsApiValueObject::class, $data),
            self::WRITTEN_FORM_COMMITMENT => $this->fillValueObject(WrittenFormCommitmentApiValueObject::class, $data),
            self::SUSPICIOUS_INTERNET_AND_COMMUNICATION => $this->fillValueObject(SuspiciousInternetAndCommunicationObjectsDecisionApiValueObject::class, $data),
            self::OUT_OF_COURT_DISPUTE_RESOLVER => $this->fillValueObject(OutOfCourtDisputeResolverApiValueObject::class, $data),
            self::BLACK_LIST => $this->fillValueObject(BlackListApiValueObject::class, $data),
            self::PTAC_DECISIONS => $this->fillValueObject(PtacDecisionApiValueObject::class, $data),
        };
    }
}
