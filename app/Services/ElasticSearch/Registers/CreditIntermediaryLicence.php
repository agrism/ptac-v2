<?php
namespace App\Services\ElasticSearch\Registers;

use App\Services\ElasticSearch\RegisterInterface;
use App\Services\Filter\Enums\FilterTypeEnum;
use App\Services\Filter\ValueObjects\FilterValueObject;
use Carbon\Carbon;

class CreditIntermediaryLicence extends AbstractRegister implements RegisterInterface
{
    public const URL = 'credit_intermediary_licence';
    public const API_URL = 'credit-intermediary-licence';

    public function getUrl(): string
    {
        return self::URL;
    }

    public function getApiUrl(): string
    {
        return self::API_URL;
    }

    public function getParams(): array
    {
        $page = $_GET['page'] ?? 0;
        $from = ($page - 1) * $this->getPerPage();
        if ($from < 0) {
            $from = 0;
        }

        $fullBody['body']['from'] = $from;
        $fullBody['body']['size'] = $this->getPerPage();


        if (!empty($_GET['q'])) {
            $fullBody['body']['query']['bool']['filter'][] = [
                'multi_match' => [
                    'query' => $_GET['q'],
                    'fields' => ['legalEntityName^2', 'legalEntityLegalAddressDisplayName', 'legalEntityFactualAddressName'],
                ]
            ];
        }

        if (!empty($_GET['from'])) {
            $fullBody['body']['query']['bool']['must'][] = [
                'range' => [
                    'dateInsuranceValidFrom' => [
                        'lte' => Carbon::parse($_GET['from'])->format('Y-m-d\TH:i:s')
                    ]
                ]
            ];
        }
        if (!empty($_GET['to'])) {
            $fullBody['body']['query']['bool']['must'][] = [
                'range' => [
                    'dateInsuranceValidUntil' => [
                        'gte' => Carbon::parse($_GET['to'])->format('Y-m-d\TH:i:s')
                    ]
                ]
            ];
        }

        return $fullBody;
    }

    public function getFilter(): array
    {
        return [
            new FilterValueObject(
                type: FilterTypeEnum::TEXT,
                label: 'Atlasīt pēc atslēgvārdiem',
                name: 'q',
                value: strval($_GET['q'] ?? null) ?: null,
                class: 'form-control',
                wrapperClass: 'mb-3 col-12 col-md-5',
                hint: 'Meklēšana pēc atslēgvārdiem tiek veikta iekš: dokumenta numuriem, nosaukumiem, kopsavilkumiem, tekstiem, kā arī saistītās organizācijas nosaukumiem, juridiskajiem nosaukumiem, juridiskajām adresēm un faktiskajām adresēm.',
            ),
            new FilterValueObject(
                type: FilterTypeEnum::RANGE,
                label: 'Izdots / pieņemts no, līdz',
                name: 'from',
                value: strval($_GET['from'] ?? null) ?: null,
                value2: strval($_GET['to'] ?? null) ?: null,
                class: 'form-control',
                wrapperClass: 'mb-3 col-12 col-md-5',
                name2: 'to',
            ),
        ];
    }
}
