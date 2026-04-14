<?php

namespace App\Providers;

use App\Integrations\HttpClient\BaseHttpClient;
use App\Integrations\TestApiClient\TestApiClientService;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class TestApiClientProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(TestApiClientService::class, function () {
            $apiClientUrl = config('apiClient.api_url');
            if (empty($apiClientUrl)) {
                throw new Exception('ApiClient url is not set');
            }
            return new TestApiClientService(
                new BaseHttpClient(
                    new Client(['base_uri' => $apiClientUrl])
                )
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
