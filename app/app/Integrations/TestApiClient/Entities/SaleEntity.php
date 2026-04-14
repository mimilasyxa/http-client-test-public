<?php

declare(strict_types=1);

namespace App\Integrations\TestApiClient\Entities;

use App\Integrations\HttpClient\Entity;
use Illuminate\Contracts\Support\Arrayable;
use InvalidArgumentException;

class SaleEntity implements Entity, Arrayable
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
        'is_supply',
        'is_realization',
        'promo_code_discount',
        'warehouse_name',
        'country_name',
        'oblast_okrug_name',
        'region_name',
        'income_id',
        'sale_id',
        'odid',
        'spp',
        'for_pay',
        'finished_price',
        'price_with_disc',
        'nm_id',
        'subject',
        'category',
        'brand',
        'is_storno',
    ];

    private string $g_number;
    private string $date;
    private string $last_change_date;
    private string $supplier_article;
    private string $tech_size;
    private int $barcode;
    private string $total_price;
    private string $discount_percent;
    private bool $is_supply;
    private bool $is_realization;
    private ?string $promo_code_discount;
    private string $warehouse_name;
    private string $country_name;
    private string $oblast_okrug_name;
    private string $region_name;
    private int $income_id;
    private string $sale_id;
    private ?string $odid;
    private string $spp;
    private string $for_pay;
    private string $finished_price;
    private string $price_with_disc;
    private int $nm_id;
    private string $subject;
    private string $category;
    private string $brand;
    private ?bool $is_storno;
    private array $originalData;

    public function __construct(array $attributes)
    {
        $this->validate($attributes);

        $this->supplier_article = $attributes['supplier_article'];
        $this->tech_size = $attributes['tech_size'];
        $this->barcode = $attributes['barcode'];
        $this->total_price = $attributes['total_price'];
        $this->discount_percent = $attributes['discount_percent'];
        $this->is_supply = $attributes['is_supply'];
        $this->is_realization = $attributes['is_realization'];
        $this->warehouse_name = $attributes['warehouse_name'];
        $this->country_name = $attributes['country_name'];
        $this->oblast_okrug_name = $attributes['oblast_okrug_name'];
        $this->region_name = $attributes['region_name'];
        $this->income_id = $attributes['income_id'];
        $this->sale_id = $attributes['sale_id'];
        $this->odid = $attributes['odid'];
        $this->spp = $attributes['spp'];
        $this->for_pay = $attributes['for_pay'];
        $this->nm_id = $attributes['nm_id'];
        $this->subject = $attributes['subject'];
        $this->category = $attributes['category'];
        $this->brand = $attributes['brand'];
        $this->is_storno = $attributes['is_storno'];
        $this->g_number = $attributes['g_number'];
        $this->finished_price = $attributes['finished_price'];
        $this->price_with_disc = $attributes['price_with_disc'];
        $this->promo_code_discount = $attributes['promo_code_discount'];
        $this->date = $attributes['date'];
        $this->last_change_date = $attributes['last_change_date'];

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

    public function getDiscountPercent(): string
    {
        return $this->discount_percent;
    }

    public function isIsSupply(): bool
    {
        return $this->is_supply;
    }

    public function isIsRealization(): bool
    {
        return $this->is_realization;
    }

    public function getPromoCodeDiscount(): ?string
    {
        return $this->promo_code_discount;
    }

    public function getWarehouseName(): string
    {
        return $this->warehouse_name;
    }

    public function getCountryName(): string
    {
        return $this->country_name;
    }

    public function getOblastOkrugName(): string
    {
        return $this->oblast_okrug_name;
    }

    public function getRegionName(): string
    {
        return $this->region_name;
    }

    public function getIncomeId(): int
    {
        return $this->income_id;
    }

    public function getSaleId(): string
    {
        return $this->sale_id;
    }

    public function getOdid(): ?string
    {
        return $this->odid;
    }

    public function getSpp(): string
    {
        return $this->spp;
    }

    public function getForPay(): string
    {
        return $this->for_pay;
    }

    public function getFinishedPrice(): string
    {
        return $this->finished_price;
    }

    public function getPriceWithDisc(): string
    {
        return $this->price_with_disc;
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

    public function getIsStorno(): ?bool
    {
        return $this->is_storno;
    }

}
