<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Entities;

use App\Integrations\HttpClient\Entity;
use Illuminate\Contracts\Support\Arrayable;
use InvalidArgumentException;

class OrderEntity implements Entity, Arrayable
{
    private array $fields = [
        'g_number',
        'date',
        'last_change_date',
        'supplier_article',
        'tech_size',
        'barcode',
        'total_price',
        'discount_percent',
        'warehouse_name',
        'oblast',
        'income_id',
        'odid',
        'nm_id',
        'subject',
        'category',
        'brand',
        'is_cancel',
        'cancel_dt',
    ];

    private string $g_number;
    private string $date;
    private string $last_change_date;
    private string $supplier_article;
    private string $tech_size;
    private int $barcode;
    private string $total_price;
    private int $discount_percent;
    private string $warehouse_name;
    private string $oblast;
    private int $income_id;
    private string $odid;
    private int $nm_id;
    private string $subject;
    private string $category;
    private string $brand;
    private bool $is_cancel;
    private ?string $cancel_dt;
    private array $originalData;

    public function __construct(
        array $attributes
    ) {
        $this->validate($attributes);
        $this->g_number = $attributes['g_number'];
        $this->date = $attributes['date'];
        $this->last_change_date = $attributes['last_change_date'];
        $this->supplier_article = $attributes['supplier_article'];
        $this->tech_size = $attributes['tech_size'];
        $this->barcode = $attributes['barcode'];
        $this->total_price = $attributes['total_price'];
        $this->discount_percent = $attributes['discount_percent'];
        $this->warehouse_name = $attributes['warehouse_name'];
        $this->oblast = $attributes['oblast'];
        $this->income_id = $attributes['income_id'];
        $this->odid = $attributes['odid'];
        $this->nm_id = $attributes['nm_id'];
        $this->subject = $attributes['subject'];
        $this->category = $attributes['category'];
        $this->brand = $attributes['brand'];
        $this->is_cancel = $attributes['is_cancel'];
        $this->cancel_dt = $attributes['cancel_dt'];

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

    public function getFields(): array
    {
        return $this->fields;
    }

    public function getGNumber(): string
    {
        return $this->g_number;
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

    public function getTotalPrice(): string
    {
        return $this->total_price;
    }

    public function getDiscountPercent(): int
    {
        return $this->discount_percent;
    }

    public function getWarehouseName(): string
    {
        return $this->warehouse_name;
    }

    public function getOblast(): string
    {
        return $this->oblast;
    }

    public function getIncomeId(): int
    {
        return $this->income_id;
    }

    public function getOdid(): string
    {
        return $this->odid;
    }

    public function getNmId(): int
    {
        return $this->nm_id;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function isIsCancel(): bool
    {
        return $this->is_cancel;
    }

    public function getCancelDt(): ?string
    {
        return $this->cancel_dt;
    }

}
