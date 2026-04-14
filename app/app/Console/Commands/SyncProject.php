<?php

namespace App\Console\Commands;

use App\Jobs\Income\SyncIncomesJob;
use App\Jobs\Order\SyncOrdersJob;
use App\Jobs\Sale\SyncSalesJob;
use App\Jobs\Stock\SyncStocksJob;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Bus;

#[Signature('app:sync-project')]
#[Description('Загрузка всех данных из эндпоинтов в БД')]
class SyncProject extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        Bus::chain(
            [
                SyncIncomesJob::class,
                SyncOrdersJob::class,
                SyncSalesJob::class,
                SyncStocksJob::class,
            ]
        )->dispatch();
    }
}
