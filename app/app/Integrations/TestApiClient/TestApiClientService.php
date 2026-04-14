<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient;

use App\Integrations\HttpClient\BaseHttpClient;
use App\Integrations\TestApiClient\Mappers\IncomeEntityMapper;
use App\Integrations\TestApiClient\Mappers\OrderEntityMapper;
use App\Integrations\TestApiClient\Mappers\SaleEntityMapper;
use App\Integrations\TestApiClient\Mappers\StockEntityMapper;
use App\Integrations\TestApiClient\Requests\GetIncomesRequest;
use App\Integrations\TestApiClient\Requests\GetOrdersRequest;
use App\Integrations\TestApiClient\Requests\GetSalesRequest;
use App\Integrations\TestApiClient\Requests\GetStocksRequest;
use Exception;
use Illuminate\Http\Client\HttpClientException;

class TestApiClientService
{
    protected string $key;

    public function __construct(protected BaseHttpClient $httpClient)
    {
        $apiKey = config('apiClient.api_key');

        if (empty($apiKey)) {
            throw new Exception('ApiClient url is not set');
        }
        $this->key = $apiKey;
    }

    /**
     * @param string $dateFrom
     * @param string|null $dateTo
     * @param int $page
     * @param int $limit
     * @return StockEntityMapper
     * @throws HttpClientException
     */
    public function getStocks(string $dateFrom, ?string $dateTo, int $page = 1, int $limit = 500): StockEntityMapper
    {
        $request = new GetStocksRequest(
            dateFrom: $dateFrom,
            dateTo: $dateTo,
            page: $page,
            key: $this->key,
            limit: $limit
        );
        $entityMapper = new StockEntityMapper();
        $this->httpClient->makeRequest($request, $entityMapper);

        return $entityMapper;
    }

    /**
     * @param string $dateFrom
     * @param string|null $dateTo
     * @param int $page
     * @param int $limit
     * @return IncomeEntityMapper
     * @throws HttpClientException
     */
    public function getIncomes(string $dateFrom, ?string $dateTo, int $page = 1, int $limit = 500): IncomeEntityMapper
    {
        $request = new GetIncomesRequest(
            dateFrom: $dateFrom,
            dateTo: $dateTo,
            page: $page,
            key: $this->key,
            limit: $limit
        );
        $entityMapper = new IncomeEntityMapper();
        $this->httpClient->makeRequest($request, $entityMapper);

        return $entityMapper;
    }

    /**
     * @param string $dateFrom
     * @param string|null $dateTo
     * @param int $page
     * @param int $limit
     * @return SaleEntityMapper
     * @throws HttpClientException
     */
    public function getSales(string $dateFrom, ?string $dateTo, int $page = 1, int $limit = 200): SaleEntityMapper
    {
        $request = new GetSalesRequest(
            dateFrom: $dateFrom,
            dateTo: $dateTo,
            page: $page,
            key: $this->key,
            limit: $limit
        );
        $entityMapper = new SaleEntityMapper();
        $this->httpClient->makeRequest($request, $entityMapper);

        return $entityMapper;
    }

    /**
     * @param string $dateFrom
     * @param string $dateTo
     * @param int $page
     * @param int $limit
     * @return OrderEntityMapper
     * @throws HttpClientException
     */
    public function getOrders(string $dateFrom, string $dateTo, int $page = 1, int $limit = 500): OrderEntityMapper
    {
        $request = new GetOrdersRequest(
            dateFrom: $dateFrom,
            dateTo: $dateTo,
            page: $page,
            key: $this->key,
            limit: $limit
        );

        $entityMapper = new OrderEntityMapper();
        $this->httpClient->makeRequest($request, $entityMapper);

        return $entityMapper;
    }


}
