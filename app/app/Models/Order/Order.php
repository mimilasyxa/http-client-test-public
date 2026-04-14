<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $g_number
 * @property string $date
 * @property string $last_change_date
 * @property string $supplier_article
 * @property string $tech_size
 * @property int $barcode
 * @property string $total_price
 * @property int $discount_percent
 * @property string $warehouse_name
 * @property string $oblast
 * @property int $income_id
 * @property int $nm_id
 * @property string $subject
 * @property string $category
 * @property string $brand
 * @property bool $is_cancel
 * @property ?string $cancel_dt
 */
class Order extends Model
{
    protected $table = 'orders';

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getGNumber(): string
    {
        return $this->g_number;
    }

    public function setGNumber(string $g_number): void
    {
        $this->g_number = $g_number;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getLastChangeDate(): string
    {
        return $this->last_change_date;
    }

    public function setLastChangeDate(string $last_change_date): void
    {
        $this->last_change_date = $last_change_date;
    }

    public function getSupplierArticle(): string
    {
        return $this->supplier_article;
    }

    public function setSupplierArticle(string $supplier_article): void
    {
        $this->supplier_article = $supplier_article;
    }

    public function getTechSize(): string
    {
        return $this->tech_size;
    }

    public function setTechSize(string $tech_size): void
    {
        $this->tech_size = $tech_size;
    }

    public function getBarcode(): int
    {
        return $this->barcode;
    }

    public function setBarcode(int $barcode): void
    {
        $this->barcode = $barcode;
    }

    public function getTotalPrice(): string
    {
        return $this->total_price;
    }

    public function setTotalPrice(string $total_price): void
    {
        $this->total_price = $total_price;
    }

    public function getDiscountPercent(): int
    {
        return $this->discount_percent;
    }

    public function setDiscountPercent(int $discount_percent): void
    {
        $this->discount_percent = $discount_percent;
    }

    public function getWarehouseName(): string
    {
        return $this->warehouse_name;
    }

    public function setWarehouseName(string $warehouse_name): void
    {
        $this->warehouse_name = $warehouse_name;
    }

    public function getOblast(): string
    {
        return $this->oblast;
    }

    public function setOblast(string $oblast): void
    {
        $this->oblast = $oblast;
    }

    public function getIncomeId(): int
    {
        return $this->income_id;
    }

    public function setIncomeId(int $income_id): void
    {
        $this->income_id = $income_id;
    }

    public function getNmId(): int
    {
        return $this->nm_id;
    }

    public function setNmId(int $nm_id): void
    {
        $this->nm_id = $nm_id;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function isIsCancel(): bool
    {
        return $this->is_cancel;
    }

    public function setIsCancel(bool $is_cancel): void
    {
        $this->is_cancel = $is_cancel;
    }

    public function getCancelDt(): ?string
    {
        return $this->cancel_dt;
    }

    public function setCancelDt(?string $cancel_dt): void
    {
        $this->cancel_dt = $cancel_dt;
    }

}
