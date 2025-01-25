<?php
namespace App\Services\ElasticSearch\Registers;

use App\Services\ElasticSearch\RegisterInterface;
use App\Services\Filter\Enums\FilterTypeEnum;
use App\Services\Filter\ValueObjects\FilterValueObject;
use Carbon\Carbon;

class ConsumerCreditProviderLicence extends AbstractRegister implements RegisterInterface
{

    public const URL = 'consumer_credit_provider_licence';

    public const API_URL = 'consumer-credit-provider-licence';

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
                    'fields' => ['legalEntityName^2', 'legalEntityLegalAddress', 'legalEntityActualAddress'],
                ]
            ];
        }

        if (!empty($_GET['d'])) {
            $fullBody['body']['query']['bool']['must'][] = [
                'range' => [
                    'dateEffectiveFrom' => [
                        'lte' => Carbon::parse($_GET['d'])->format('Y-m-d\TH:i:s')
                    ]
                ]
            ];
            $fullBody['body']['query']['bool']['must'][] = [
                'range' => [
                    'dateAnnulled' => [
                        'gte' => Carbon::parse($_GET['d'])->format('Y-m-d\TH:i:s')
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
                type: FilterTypeEnum::DATEPICKER,
                label: 'Derīgs datumā',
                name: 'd',
                value: strval($_GET['d'] ?? null) ?: null,
                class: 'form-control',
                wrapperClass: 'mb-3 col-12 col-md-5',

            )
        ];
    }
}
