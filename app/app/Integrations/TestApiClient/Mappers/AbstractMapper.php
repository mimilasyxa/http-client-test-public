<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Mappers;

use App\Integrations\HttpClient\BaseEntityMapper;
use App\Integrations\HttpClient\Entity;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Throwable;

abstract class AbstractMapper implements BaseEntityMapper
{
    protected ?string $entityClass = null;
    private int $currentPage = 1;
    private ?int $lastPage;
    private Collection $entities;

    public function parse(array $data): Entity|Collection
    {
        try {
            $responseData = $data['data'];
            $meta = $data['meta'];
        } catch (Throwable $exception) {
            Log::channel('integrations')->error($exception->getMessage());
            throw $exception;
        }

        $this->entities = collect($this->parseEntities($responseData));
        $this->parsePaginationInfo($meta);

        return $this->entities;
    }

    /**
     * @throws Exception
     */
    private function parseEntities(array $responseData): array
    {
        if (!$this->entityClass) {
            throw new Exception('Entity class not set');
        }
        if (empty($responseData)) {
            return [];
        }

        $entities = [];
        foreach ($responseData as $entityData) {
            $entities[] = new $this->entityClass($entityData);
        }

        return $entities;
    }

    private function parsePaginationInfo(array $meta): void
    {
        $this->currentPage = (int)$meta['current_page'];
        $this->lastPage = (int)$meta['last_page'];
    }

    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    public function getLastPage(): ?int
    {
        return $this->lastPage;
    }

    public function getEntities(): Collection
    {
        return $this->entities;
    }

}
