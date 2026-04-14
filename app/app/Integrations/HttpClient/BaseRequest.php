<?php

declare(strict_types=1);

namespace App\Integrations\HttpClient;

interface BaseRequest
{

    public function getMethod(): string;

    public function getUri(): string;

    public function getOptions(): array;
}
