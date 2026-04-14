<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Entities;

use App\Integrations\HttpClient\Entity;
use Illuminate\Contracts\Support\Arrayable;
use InvalidArgumentException;

class IncomeEntity implements Entity, Arrayable
{
    private array $fields = [
        'income_id',
        'number',
        'date',
        'last_change_date',
        'supplier_article',
        'tech_size',
        'barcode',
        'quantity',
        'total_price',
        'date_close',
        'warehouse_name',
        'nm_id'
    ];

    private int $income_id;
    private string $number;
    private string $date;
    private string $last_change_date;
    private string $supplier_article;
    private string $tech_size;
    private int $barcode;
    private int $quantity;
    private string $total_price;
    private string $date_close;
    private string $warehouse_name;
    private int $nm_id;
    private array $originalData;

    public function __construct(array $attributes)
    {
        $this->validate($attributes);
        $this->income_id = $attributes['income_id'];
        $this->number = $attributes['number'];
        $this->date = $attributes['date'];
        $this->last_change_date = $attributes['last_change_date'];
        $this->supplier_article = $attributes['supplier_article'];
        $this->tech_size = $attributes['tech_size'];
        $this->barcode = $attributes['barcode'];
        $this->quantity = $attributes['quantity'];
        $this->total_price = $attributes['total_price'];
        $this->date_close = $attributes['date_close'];
        $this->warehouse_name = $attributes['warehouse_name'];
        $this->nm_id = $attributes['nm_id'];

        $this->originalData = $attributes;
    }

    private function validate(array $attributes): void
    {
        foreach ($attributes as $key => $value) {
            if (!in_array($key, $this->fields)) {
                throw new InvalidArgumentException("Missing field '$key'");
            }
        }
    }

    public function toArray(): array
    {
        return $this->originalData;
    }

    public function getIncomeId(): int
    {
        return $this->income_id;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getLastChangeDate(): string
    {
        return $this->last_change_date;
    }

    public function getSupplierArticle(): string
    {
        return $this->supplier_article;
    }

    public function getTechSize(): string
    {
        return $this->tech_size;
    }

    public function getBarcode(): int
    {
        return $this->barcode;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getTotalPrice(): string
    {
        return $this->total_price;
    }

    public function getDateClose(): string
    {
        return $this->date_close;
    }

    public function getWarehouseName(): string
    {
        return $this->warehouse_name;
    }

    public function getNmId(): int
    {
        return $this->nm_id;
    }

}
