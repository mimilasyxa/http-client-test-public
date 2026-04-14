<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Entities;

use App\Integrations\HttpClient\Entity;
use Illuminate\Contracts\Support\Arrayable;
use InvalidArgumentException;

class StockEntity implements Entity, Arrayable
{
    private array $fields = [
        'date',
        'last_change_date',
        'supplier_article',
        'tech_size',
        'barcode',
        'quantity',
        'is_supply',
        'is_realization',
        'quantity_full',
        'warehouse_name',
        'in_way_to_client',
        'in_way_from_client',
        'nm_id',
        'subject',
        'category',
        'brand',
        'sc_code',
        'price',
        'discount'
    ];
    private ?string $discount;
    private ?string $price;
    private ?int $sc_code;
    private ?string $brand;
    private ?string $category;
    private ?string $subject;
    private int $nm_id;
    private ?int $in_way_from_client;
    private ?int $in_way_to_client;
    private string $warehouse_name;
    private ?int $quantity_full;
    private ?bool $is_realization;
    private ?bool $is_supply;
    private int $quantity;
    private int $barcode;
    private ?string $tech_size;
    private ?string $supplier_article;
    private ?string $last_change_date;
    private string $date;

    private array $originalData;

    public function __construct(array $attributes)
    {
        $this->validate($attributes);

        $this->date = $attributes['date'];
        $this->last_change_date = $attributes['last_change_date'];
        $this->supplier_article = $attributes['supplier_article'];
        $this->tech_size = $attributes['tech_size'];
        $this->barcode = $attributes['barcode'];
        $this->quantity = $attributes['quantity'];
        $this->is_supply = $attributes['is_supply'];
        $this->is_realization = $attributes['is_realization'];
        $this->quantity_full = $attributes['quantity_full'];
        $this->warehouse_name = $attributes['warehouse_name'];
        $this->in_way_to_client = $attributes['in_way_to_client'];
        $this->in_way_from_client = $attributes['in_way_from_client'];
        $this->nm_id = $attributes['nm_id'];
        $this->subject = $attributes['subject'];
        $this->category = $attributes['category'];
        $this->brand = $attributes['brand'];
        $this->sc_code = $attributes['sc_code'];
        $this->price = $attributes['price'];
        $this->discount = $attributes['discount'];
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

    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function getScCode(): ?int
    {
        return $this->sc_code;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function getNmId(): int
    {
        return $this->nm_id;
    }

    public function getInWayFromClient(): ?int
    {
        return $this->in_way_from_client;
    }

    public function getInWayToClient(): ?int
    {
        return $this->in_way_to_client;
    }

    public function getWarehouseName(): string
    {
        return $this->warehouse_name;
    }

    public function getQuantityFull(): ?int
    {
        return $this->quantity_full;
    }

    public function getIsRealization(): ?bool
    {
        return $this->is_realization;
    }

    public function getIsSupply(): ?bool
    {
        return $this->is_supply;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getBarcode(): int
    {
        return $this->barcode;
    }

    public function getTechSize(): ?string
    {
        return $this->tech_size;
    }

    public function getSupplierArticle(): ?string
    {
        return $this->supplier_article;
    }

    public function getLastChangeDate(): ?string
    {
        return $this->last_change_date;
    }

    public function getDate(): string
    {
        return $this->date;
    }

}
