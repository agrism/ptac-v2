<?php
namespace App\Services\ElasticSearch\Registers;

use App\Services\ElasticSearch\Enums\EnvironmentEnum;
use App\Services\Filter\ValueObjects\FilterValueObject;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractRegister
{

    protected int $perPage = 5;
    public const PER_PAGE = 5;

    private function getEnv(): EnvironmentEnum
    {
        return EnvironmentEnum::tryFrom($_SERVER['ELASTIC_ENV'] ?? '');
    }
    public function getPath(): string
    {
        return 'https://ptac-api-'. $this->getEnv()->value .'.azurewebsites.net/api/public-db/';
    }

    public function getFullUrl(int $id): string
    {
        return $this->getPath() . static::API_URL . '/' . $id;
    }

    public function getApiData(int $id)
    {
        $client = new Client();
        $request = $client->get($this->getFullUrl($id));
        $response = $request->getBody();

        return json_decode($response, true);
    }

    public function downloadFile(int $id): ResponseInterface
    {
        $client = new Client();
        return $client->get($this->getPath() . 'file/download/' . $id, [
            'stream' => true,
        ]);
    }

    public function getFileName(): string
    {
        return static::URL;
    }

    public function setPerPage(int $perPage): void
    {
        $this->perPage = $perPage;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @return FilterValueObject[]
     */
    public function getFilter(): array
    {
        return [];
    }
}
