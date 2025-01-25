<?php
namespace App\Services\ElasticSearch;

use App\Services\Filter\ValueObjects\FilterValueObject;
use Psr\Http\Message\ResponseInterface;

interface RegisterInterface
{
    public function getUrl(): string;

    public function getApiUrl(): string;

    public function getParams(): array;

    public function getApiData(int $id);

    public function getFileName(): string;

    /**
     * @return FilterValueObject[]
     */
    public function getFilter(): array;

    public function downloadFile(int $id): ResponseInterface;
}
