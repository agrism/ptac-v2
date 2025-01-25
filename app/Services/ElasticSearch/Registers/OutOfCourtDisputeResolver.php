<?php

namespace App\Services\ElasticSearch\Registers;

use App\Services\ElasticSearch\RegisterInterface;
use App\Services\Filter\Enums\FilterTypeEnum;
use App\Services\Filter\ValueObjects\FilterValueObject;

class OutOfCourtDisputeResolver extends AbstractRegister implements RegisterInterface
{

    public const URL = 'out_of_court_dispute_resolver';
    public const API_URL = 'out-of-court-dispute-resolver';

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
                    'fields' => [
                        'name^2',
                        'legalAddressDisplayName',
                    ],
                ]
            ];
        }

        if (!empty($_GET['registration_number'])) {
            $fullBody['body']['query']['bool']['filter'][] = [
                'term' => [
                    'registrationNumber' => $_GET['registration_number'],
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
                type: FilterTypeEnum::TEXT,
                label: 'Reģistrācijas numurs',
                name: 'registration_number',
                value: strval($_GET['registration_number'] ?? null) ?: null,
                class: 'form-control',
                wrapperClass: 'mb-3 col-12 col-md-5',
            ),
        ];
    }
}
