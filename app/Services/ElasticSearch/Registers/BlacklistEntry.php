<?php
namespace App\Services\ElasticSearch\Registers;

use App\Services\ElasticSearch\RegisterInterface;
use App\Services\Filter\Enums\FilterTypeEnum;
use App\Services\Filter\ValueObjects\FilterValueObject;

class BlacklistEntry extends AbstractRegister implements RegisterInterface
{

    public const URL = 'blacklist_entry';
    public const API_URL = 'blacklist-entry';

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
                    'fields' => ['merchantName^2', 'merchantLegalAddress'],
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
        ];
    }
}
