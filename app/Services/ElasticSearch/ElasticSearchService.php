<?php

namespace App\Services\ElasticSearch;

use App\Services\ElasticSearch\Enums\EnvironmentEnum;
use Elastic\ElasticSearch\Client;
use Elastic\Elasticsearch\ClientBuilder;

class ElasticSearchService
{
    protected RegisterInterface $register;
    protected ?string $search = null;
    protected string $path;

    public function __construct(RegisterInterface $register)
    {
        $this->path = config('services.elastic-search.uri');
        $this->register = $register;
    }

    public function setSearch(?string $search): self
    {
        $this->search = $search;
        return $this;
    }

    public function execute(): array
    {
        $client = ClientBuilder::create()
            ->setHosts([$this->getUrl()])
            ->setApiKey(config('services.elastic-search.api-key'))
            ->build();

        // TODO uzlabot mekleetaju pec dinamiskiem match laukiem.

        $result = $client->search($this->register->getParams());

        return $result->asArray();
    }

    public function getUrl(): string
    {
        return sprintf(
            '%s/search-ptac-%s.%s',
            rtrim($this->path, '/'),
            $this->getEnv()->value,
            $this->register->getUrl()
        );
    }

    protected function getEnv(): EnvironmentEnum
    {
        return EnvironmentEnum::tryFrom(config('services.elastic-search.env'));
    }
}
