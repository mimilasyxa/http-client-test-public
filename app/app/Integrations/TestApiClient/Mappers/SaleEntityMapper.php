<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Mappers;

use App\Integrations\TestApiClient\Entities\SaleEntity;

class SaleEntityMapper extends AbstractMapper
{
    public function __construct()
    {
        $this->entityClass = SaleEntity::class;
    }
}
