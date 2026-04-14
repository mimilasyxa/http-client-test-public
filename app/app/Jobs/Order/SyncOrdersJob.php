<?php

namespace App\Jobs\Order;

use App\Integrations\TestApiClient\TestApiClientService;
use App\Models\Order\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Bus;

class SyncOrdersJob implements ShouldQueue
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
        $startDate = Carbon::parse('1970-01-01');
        $data = $testApiClientService->getOrders(
            $startDate->toDateString(),
            $now->toDateString(),
            $this->currentPage
        );

        $orders = $data->getEntities();

        Order::query()
            ->insert($orders->toArray());

        if ($this->mainJob) {
            $this->handleForMainJob($data->getCurrentPage(), $data->getLastPage());
        }
    }

    public function handleForMainJob(int $currentPage, int $lastPage): void
    {
        $jobs = [];
        foreach (range($currentPage + 1, $lastPage) as $page) {
            $jobs[] = (new SyncOrdersJob($page, false))->delay(now()->addSeconds(5 * $page));
        }
        Bus::chain($jobs)->dispatch();
    }
}
