<?php

namespace App\Models\Sale;

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
 * @property string $discount_percent
 * @property bool $is_supply
 * @property bool $is_realization
 * @property ?string $promo_code_discount
 * @property string $warehouse_name
 * @property string $country_name
 * @property string $oblast_okrug_name
 * @property string $region_name
 * @property int $income_id
 * @property string $sale_id
 * @property ?string $odid
 * @property string $spp
 * @property string $for_pay
 * @property string $finished_price
 * @property string $price_with_disc
 * @property int $nm_id
 * @property string $subject
 * @property string $category
 * @property string $brand
 * @property ?bool $is_storno
 */
class Sale extends Model
{
    protected $table = 'sales';

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

    public function getDiscountPercent(): string
    {
        return $this->discount_percent;
    }

    public function setDiscountPercent(string $discount_percent): void
    {
        $this->discount_percent = $discount_percent;
    }

    public function isIsSupply(): bool
    {
        return $this->is_supply;
    }

    public function setIsSupply(bool $is_supply): void
    {
        $this->is_supply = $is_supply;
    }

    public function isIsRealization(): bool
    {
        return $this->is_realization;
    }

    public function setIsRealization(bool $is_realization): void
    {
        $this->is_realization = $is_realization;
    }

    public function getPromoCodeDiscount(): ?string
    {
        return $this->promo_code_discount;
    }

    public function setPromoCodeDiscount(?string $promo_code_discount): void
    {
        $this->promo_code_discount = $promo_code_discount;
    }

    public function getWarehouseName(): string
    {
        return $this->warehouse_name;
    }

    public function setWarehouseName(string $warehouse_name): void
    {
        $this->warehouse_name = $warehouse_name;
    }

    public function getCountryName(): string
    {
        return $this->country_name;
    }

    public function setCountryName(string $country_name): void
    {
        $this->country_name = $country_name;
    }

    public function getOblastOkrugName(): string
    {
        return $this->oblast_okrug_name;
    }

    public function setOblastOkrugName(string $oblast_okrug_name): void
    {
        $this->oblast_okrug_name = $oblast_okrug_name;
    }

    public function getRegionName(): string
    {
        return $this->region_name;
    }

    public function setRegionName(string $region_name): void
    {
        $this->region_name = $region_name;
    }

    public function getIncomeId(): int
    {
        return $this->income_id;
    }

    public function setIncomeId(int $income_id): void
    {
        $this->income_id = $income_id;
    }

    public function getSaleId(): string
    {
        return $this->sale_id;
    }

    public function setSaleId(string $sale_id): void
    {
        $this->sale_id = $sale_id;
    }

    public function getOdid(): ?string
    {
        return $this->odid;
    }

    public function setOdid(?string $odid): void
    {
        $this->odid = $odid;
    }

    public function getSpp(): string
    {
        return $this->spp;
    }

    public function setSpp(string $spp): void
    {
        $this->spp = $spp;
    }

    public function getForPay(): string
    {
        return $this->for_pay;
    }

    public function setForPay(string $for_pay): void
    {
        $this->for_pay = $for_pay;
    }

    public function getFinishedPrice(): string
    {
        return $this->finished_price;
    }

    public function setFinishedPrice(string $finished_price): void
    {
        $this->finished_price = $finished_price;
    }

    public function getPriceWithDisc(): string
    {
        return $this->price_with_disc;
    }

    public function setPriceWithDisc(string $price_with_disc): void
    {
        $this->price_with_disc = $price_with_disc;
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

    public function getIsStorno(): ?bool
    {
        return $this->is_storno;
    }

    public function setIsStorno(?bool $is_storno): void
    {
        $this->is_storno = $is_storno;
    }

}
