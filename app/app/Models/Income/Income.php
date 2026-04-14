<?php

namespace App\Models\Income;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $income_id
 * @property string $number
 * @property string $date
 * @property string $last_change_date
 * @property string $supplier_article
 * @property string $tech_size
 * @property int $barcode
 * @property int $quantity
 * @property string $total_price
 * @property string $date_close
 * @property string $warehouse_name
 * @property int $nm_id
 */
class Income extends Model
{
    protected $table = 'incomes';

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIncomeId(): int
    {
        return $this->income_id;
    }

    public function setIncomeId(int $income_id): void
    {
        $this->income_id = $income_id;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
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

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getTotalPrice(): string
    {
        return $this->total_price;
    }

    public function setTotalPrice(string $total_price): void
    {
        $this->total_price = $total_price;
    }

    public function getDateClose(): string
    {
        return $this->date_close;
    }

    public function setDateClose(string $date_close): void
    {
        $this->date_close = $date_close;
    }

    public function getWarehouseName(): string
    {
        return $this->warehouse_name;
    }

    public function setWarehouseName(string $warehouse_name): void
    {
        $this->warehouse_name = $warehouse_name;
    }

    public function getNmId(): int
    {
        return $this->nm_id;
    }

    public function setNmId(int $nm_id): void
    {
        $this->nm_id = $nm_id;
    }

}
