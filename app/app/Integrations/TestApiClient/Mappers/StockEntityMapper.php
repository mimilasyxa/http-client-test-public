<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Mappers;

use App\Integrations\TestApiClient\Entities\StockEntity;

class StockEntityMapper extends AbstractMapper
{
    public function __construct()
    {
        $this->entityClass = StockEntity::class;
    }
}
