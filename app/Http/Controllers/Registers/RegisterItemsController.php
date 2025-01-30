<?php

namespace App\Http\Controllers\Registers;

use App\Http\Controllers\Controller;
use App\Services\ElasticSearch\ElasticSearchService;
use App\Services\ElasticSearch\Registers\BlacklistEntry;
use App\Services\ElasticSearch\Registers\CommissionDecision;
use App\Services\ElasticSearch\Registers\ConsumerCreditProviderLicence;
use App\Services\ElasticSearch\Registers\CreditIntermediaryLicence;
use App\Services\ElasticSearch\Registers\DebtRecoveryProviderLicence;
use App\Services\ElasticSearch\Registers\GasCylinder;
use App\Services\ElasticSearch\Registers\OutOfCourtDisputeResolver;
use App\Services\ElasticSearch\Registers\Playground;
use App\Services\ElasticSearch\Registers\PtacDecisions;
use App\Services\ElasticSearch\Registers\SuspiciousInternetAndCommunicationObjectsDecision;
use App\Services\ElasticSearch\Registers\TourismServiceProviderLicence;
use App\Services\ElasticSearch\Registers\UnsafeAndNonCompliantGoods;
use App\Services\ElasticSearch\Registers\WrittenFormCommitment;
use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;
use App\Services\RegisterService\Enums\RegisterEnum;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterItemsController extends Controller
{
    public function __invoke(Request $request, string $register): View
    {

        if(!$register = RegisterEnum::tryFrom($register)){
            abort(404);
        }

        $service = app(ElasticSearchService::class, ['register' => $instance = $register->getRegisterInstance()]);


        if($instance instanceof  PtacDecisions){
            abort(404,'no ELK data');
        }

        $result = $service->execute();

//        $widgetData['registerItemsTotalCount'] = $result['hits']['total']['value'] ?? 0;
        $elkItems = $result['hits']['hits'] ?? [];

        $items = [];

//        $viewFilePath = view('registers.black-list.index')->getPath();

        foreach ($elkItems as $item) {
            /** @var AbstractValueObject $valueObject */
            $valueObject = $register->getValueObject($item['_source'] ?? []);
            $valueObject->setElkRawData($item);
            $valueObject->setElkUrl($service->getUrl());
            $valueObject->setViewFile($viewFilePath ?? 'xx');
            $items[] = $valueObject;
        }

        if($instance instanceof BlacklistEntry){
            return view('registers.black-list.index', compact('items', 'register'));
        } elseif($instance instanceof DebtRecoveryProviderLicence){
            return view('registers.debt-recovery-provider-licence.index', compact('items', 'register'));
        } elseif($instance instanceof ConsumerCreditProviderLicence){
            return view('registers.consumer-credit-provider-licences.index', compact('items', 'register'));
        } elseif($instance instanceof CreditIntermediaryLicence){
            return view('registers.credit-intermediary-licences.index', compact('items', 'register'));
        } elseif($instance instanceof Playground){
            return view('registers.playground.index', compact('items', 'register'));
        } elseif($instance instanceof GasCylinder){
            return view('registers.gas-cylinder.index', compact('items', 'register'));
        } elseif($instance instanceof UnsafeAndNonCompliantGoods){
            return view('registers.unsafe-and-non-compliant-goods.index', compact('items', 'register'));
        } elseif($instance instanceof WrittenFormCommitment){
            return view('registers.written-form-commitment.index', compact('items', 'register'));
        } elseif($instance instanceof OutOfCourtDisputeResolver){
            return view('registers.out-of-court-dispute-resolver.index', compact('items', 'register'));
        } elseif($instance instanceof CommissionDecision){
            return view('registers.commission-decisions.index', compact('items', 'register'));
        } elseif($instance instanceof SuspiciousInternetAndCommunicationObjectsDecision){
            return view('registers.suspicious-internet-and-communication.index', compact('items', 'register'));
        } elseif($instance instanceof TourismServiceProviderLicence){
            return view('registers.tourism-service-provider-licences.index', compact('items', 'register'));
        } else {
            return view('registers.unknown.index', compact('items', 'register'));
        }
    }
}
