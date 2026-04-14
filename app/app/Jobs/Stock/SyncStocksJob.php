<?php

namespace App\Jobs\Stock;

use App\Integrations\TestApiClient\TestApiClientService;
use App\Models\Stock\Stock;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Bus;

class SyncStocksJob implements ShouldQueue
{
    use Queueable;

    private int $currentPage = 1;
    private bool $mainJob;

    /**
     * Create a new job instance.
     */
    public function __construct(
        ?int $currentPage = 1,
        bool $mainJob = true,
    ) {
        $this->mainJob = $mainJob;
        $this->currentPage = $currentPage;
    }

    /**
     * Execute the job.
     */
    public function handle(
        TestApiClientService $testApiClientService,
    ): void {
        $now = Carbon::now();
        $data = $testApiClientService->getStocks(
            $now->toDateString(),
            null,
        );

        $stocks = $data->getEntities();
        Stock::query()
            ->insert($stocks->toArray());

        if ($this->mainJob) {
            $this->handleForMainJob($data->getCurrentPage(), $data->getLastPage());
        }
    }

    public function handleForMainJob(int $currentPage, int $lastPage): void
    {
        $jobs = [];
        foreach (range($currentPage + 1, $lastPage) as $page) {
            $jobs[] = (new SyncStocksJob($page, false))->delay(now()->addSeconds(5 * $page));
        }
        Bus::chain($jobs)->dispatch();
    }
}
