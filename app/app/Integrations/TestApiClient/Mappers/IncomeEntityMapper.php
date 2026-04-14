<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Mappers;

use App\Integrations\TestApiClient\Entities\IncomeEntity;

class IncomeEntityMapper extends AbstractMapper
{
    public function __construct()
    {
        $this->entityClass = IncomeEntity::class;
    }
}
