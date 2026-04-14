<?php

namespace App\Models\Stock;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property ?string $discount
 * @property ?string $price
 * @property ?int $sc_code
 * @property ?string $brand
 * @property ?string $category
 * @property ?string $subject
 * @property int $nm_id
 * @property ?bool $in_way_from_client
 * @property ?bool $in_way_to_client
 * @property string $warehouse_name
 * @property ?int $quantity_full
 * @property ?bool $is_realization
 * @property ?bool $is_supply
 * @property int $quantity
 * @property int $barcode
 * @property ?string $tech_size
 * @property ?string $supplier_article
 * @property ?string $last_change_date
 * @property string $date
 */
class Stock extends Model
{
    protected $table = 'stocks';

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    public function setDiscount(?string $discount): void
    {
        $this->discount = $discount;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): void
    {
        $this->price = $price;
    }

    public function getScCode(): ?int
    {
        return $this->sc_code;
    }

    public function setScCode(?int $sc_code): void
    {
        $this->sc_code = $sc_code;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): void
    {
        $this->subject = $subject;
    }

    public function getNmId(): int
    {
        return $this->nm_id;
    }

    public function setNmId(int $nm_id): void
    {
        $this->nm_id = $nm_id;
    }

    public function getInWayFromClient(): ?bool
    {
        return $this->in_way_from_client;
    }

    public function setInWayFromClient(?bool $in_way_from_client): void
    {
        $this->in_way_from_client = $in_way_from_client;
    }

    public function getInWayToClient(): ?bool
    {
        return $this->in_way_to_client;
    }

    public function setInWayToClient(?bool $in_way_to_client): void
    {
        $this->in_way_to_client = $in_way_to_client;
    }

    public function getWarehouseName(): string
    {
        return $this->warehouse_name;
    }

    public function setWarehouseName(string $warehouse_name): void
    {
        $this->warehouse_name = $warehouse_name;
    }

    public function getQuantityFull(): ?int
    {
        return $this->quantity_full;
    }

    public function setQuantityFull(?int $quantity_full): void
    {
        $this->quantity_full = $quantity_full;
    }

    public function getIsRealization(): ?bool
    {
        return $this->is_realization;
    }

    public function setIsRealization(?bool $is_realization): void
    {
        $this->is_realization = $is_realization;
    }

    public function getIsSupply(): ?bool
    {
        return $this->is_supply;
    }

    public function setIsSupply(?bool $is_supply): void
    {
        $this->is_supply = $is_supply;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getBarcode(): int
    {
        return $this->barcode;
    }

    public function setBarcode(int $barcode): void
    {
        $this->barcode = $barcode;
    }

    public function getTechSize(): ?string
    {
        return $this->tech_size;
    }

    public function setTechSize(?string $tech_size): void
    {
        $this->tech_size = $tech_size;
    }

    public function getSupplierArticle(): ?string
    {
        return $this->supplier_article;
    }

    public function setSupplierArticle(?string $supplier_article): void
    {
        $this->supplier_article = $supplier_article;
    }

    public function getLastChangeDate(): ?string
    {
        return $this->last_change_date;
    }

    public function setLastChangeDate(?string $last_change_date): void
    {
        $this->last_change_date = $last_change_date;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }
}
