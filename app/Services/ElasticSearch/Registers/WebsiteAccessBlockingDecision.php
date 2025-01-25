<?php
namespace App\Services\ElasticSearch\Registers;

use App\Services\ElasticSearch\RegisterInterface;

class WebsiteAccessBlockingDecision extends AbstractRegister implements RegisterInterface
{

    public const URL = 'website_access_blocking_decision';
    public const API_URL = 'website-access-blocking-decision'; // @TODO

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

        return [
            'body' => [
                'from' => $from,
                'size' => $this->getPerPage(),
            ],
        ];
    }
}
