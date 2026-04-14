<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Requests;

use App\Integrations\HttpClient\BaseRequest;

class GetIncomesRequest implements BaseRequest
{
    public function __construct(
        protected string $dateFrom,
        protected string $dateTo,
        protected int $page,
        protected string $key,
        protected int $limit = 500
    ) {
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/api/incomes?dateFrom=' . $this->dateFrom . '&dateTo=' . $this->dateTo . '&page=' . $this->page . '&limit=' . $this->limit . '&key=' . $this->key;
    }

    public function getOptions(): array
    {
        return [];
    }
}
