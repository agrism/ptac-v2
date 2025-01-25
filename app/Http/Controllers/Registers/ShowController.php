<?php

namespace App\Http\Controllers\Registers;

use App\Http\Controllers\Controller;
use App\Services\ElasticSearch\ElasticSearchService;
use App\Services\ElasticSearch\Registers\BlacklistEntry;
use App\Services\ElasticSearch\VaueObjects\Registers\AbstractValueObject;
use App\Services\RegisterService\Enums\RegisterEnum;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShowController extends Controller
{
    public function __invoke(Request $request, string $register): View
    {

        if(!$register = RegisterEnum::tryFrom($register)){
            abort(404);
        }

        $service = app(ElasticSearchService::class, ['register' => $register->getRegisterInstance()]);

        $result = $service->execute();

//        $widgetData['registerItemsTotalCount'] = $result['hits']['total']['value'] ?? 0;
        $elkItems = $result['hits']['hits'] ?? [];

        $items = [];

        $viewFilePath = view('registers.black-list.index')->getPath();

        foreach ($elkItems as $item) {
            /** @var AbstractValueObject $valueObject */
            $valueObject = $register->getValueObject($item['_source'] ?? []);
            $valueObject->setElkRawData($item);
            $valueObject->setElkUrl($service->getUrl());
            $valueObject->setViewFile($viewFilePath);
            $items[] = $valueObject;
        }

        return view('registers.black-list.index', compact('items'));
    }
}
