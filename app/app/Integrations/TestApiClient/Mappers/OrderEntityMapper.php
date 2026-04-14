<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Mappers;

use App\Integrations\TestApiClient\Entities\OrderEntity;

class OrderEntityMapper extends AbstractMapper
{
    public function __construct()
    {
        $this->entityClass = OrderEntity::class;
    }
}
