<?php

declare(strict_types=1);

namespace App\Integrations\HttpClient;

use GuzzleHttp\Client;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Throwable;

class BaseHttpClient
{
    public function __construct(
        protected Client $client
    ) {
    }

    /**
     * @throws HttpClientException
     */
    public function makeRequest(BaseRequest $request, BaseEntityMapper $entityMapper): Entity|Collection
    {
        try {
            $result = $this->client->request($request->getMethod(), $request->getUri(), $request->getOptions());
            $content = $result->getBody()->getContents();
            $data = json_decode($content, true);
            return $entityMapper->parse($data);
        } catch (Throwable $exception) {
            Log::channel('httpClient')->error($exception->getMessage());
            throw new HttpClientException($exception->getMessage());
        }
    }
}
