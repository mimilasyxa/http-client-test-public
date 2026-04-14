<?php

declare(strict_types=1);

namespace App\Integrations\HttpClient;

use Illuminate\Support\Collection;

interface BaseEntityMapper
{
    public function parse(array $data): Entity|Collection;
}
