<?php
namespace App\Services\ElasticSearch\Registers;

use App\Services\ElasticSearch\RegisterInterface;

class PtacDecisions extends AbstractRegister implements RegisterInterface
{

    public const URL = 'todo-??';
    public const API_URL = 'todo-??'; // TODO

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
