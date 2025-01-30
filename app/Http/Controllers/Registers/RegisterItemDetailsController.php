<?php

namespace App\Http\Controllers\Registers;

use App\Http\Controllers\Controller;
use App\Services\ElasticSearch\Registers\BlacklistEntry;
use App\Services\ElasticSearch\Registers\CommissionDecision;
use App\Services\ElasticSearch\Registers\ConsumerCreditProviderLicence;
use App\Services\ElasticSearch\Registers\CreditIntermediaryLicence;
use App\Services\ElasticSearch\Registers\DebtRecoveryProviderLicence;
use App\Services\ElasticSearch\Registers\GasCylinder;
use App\Services\ElasticSearch\Registers\OutOfCourtDisputeResolver;
use App\Services\ElasticSearch\Registers\Playground;
use App\Services\ElasticSearch\Registers\SuspiciousInternetAndCommunicationObjectsDecision;
use App\Services\ElasticSearch\Registers\TourismServiceProviderLicence;
use App\Services\ElasticSearch\Registers\UnsafeAndNonCompliantGoods;
use App\Services\ElasticSearch\Registers\WrittenFormCommitment;
use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;
use App\Services\RegisterService\Enums\RegisterEnum;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterItemDetailsController extends Controller
{
    public function __invoke(Request $request, string $register, string $id): View
    {

        if(!$register = RegisterEnum::tryFrom($register)){
            abort(404);
        }

        $instance = $register->getRegisterInstance();

        $itemData = $instance->getApiData(id: $id);
        $itemData = is_array($itemData) ? $itemData : [];
        /** @var AbstractValueObject $valueObject */
        $valueObject = $register->getApiValueObject($itemData);

        if($instance instanceof BlacklistEntry){
            return view('registers.black-list.show', compact('valueObject', 'register'));
        } elseif($instance instanceof DebtRecoveryProviderLicence){
            return view('registers.debt-recovery-provider-licence.show', compact('valueObject', 'register'));
        } elseif($instance instanceof ConsumerCreditProviderLicence){
            return view('registers.consumer-credit-provider-licences.show', compact('valueObject', 'register'));
        } elseif($instance instanceof CreditIntermediaryLicence){
            return view('registers.credit-intermediary-licences.show', compact('valueObject', 'register'));
        } elseif($instance instanceof Playground){
            return view('registers.playground.show', compact('valueObject', 'register'));
        } elseif($instance instanceof GasCylinder){
            return view('registers.gas-cylinder.show', compact('valueObject', 'register'));
        } elseif($instance instanceof UnsafeAndNonCompliantGoods){
            return view('registers.unsafe-and-non-compliant-goods.show', compact('valueObject', 'register'));
        } elseif($instance instanceof WrittenFormCommitment){
            return view('registers.written-form-commitment.show', compact('valueObject', 'register'));
        } elseif($instance instanceof OutOfCourtDisputeResolver){
            return view('registers.out-of-court-dispute-resolver.show', compact('valueObject', 'register'));
        } elseif($instance instanceof CommissionDecision){
            return view('registers.commission-decisions.show', compact('valueObject', 'register'));
        } elseif($instance instanceof SuspiciousInternetAndCommunicationObjectsDecision){
            return view('registers.suspicious-internet-and-communication.show', compact('valueObject', 'register'));
        } elseif($instance instanceof TourismServiceProviderLicence){
            return view('registers.tourism-service-provider-licences.show', compact('valueObject', 'register'));
        } else {
            return view('registers.unknown.show', compact('valueObject', 'register'));
        }
    }
}
