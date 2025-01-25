<?php

namespace App\Services\ElasticSearch\VaueObjects\Registers;

use Carbon\Carbon;
use Exception;

abstract class AbstractValueObject
{
    protected mixed $elkRawData = null;
    protected string|null $elkUrl = null;
    protected string|null $viewFile = null;

    public function setViewFile(string $file): void
    {
        $this->viewFile = $file;
    }

    public function getViewFile(): mixed
    {
        return $this->viewFile;
    }

    public function setElkRawData($elkData): void
    {
        $this->elkRawData = $elkData;
    }

    public function getElkRawData(): mixed
    {
        return $this->elkRawData;
    }

    public function setElkUrl($url): void
    {
        $this->elkUrl = $url;
    }

    public function getElkUrl(): ?string
    {
        return $this->elkUrl;
    }

    public function getClass(): string
    {
        return static::class;
    }

    public function getDate(?string $date, string $format = 'd.m.Y.'): ?string
    {
        try {
            return Carbon::parse($date)->format($format);
        } catch (Exception) {
        }
        return null;
    }
}
