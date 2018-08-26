<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';

    //protected $code; TODO: verificare che possa servire oppure no
    protected $description;
    protected $category_id;
    protected $quantity_available;
    protected $min_stock;
    protected $min_reorder;
    protected $price_supplier;
    protected $price_customer;
    protected $product_barcode;
    protected $product_code;
    protected $note;
    protected $brand;
    protected $supplier_id;


    /**
     * @return mixed
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCategoryId(): int {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id): void {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getQuantityAvailable(): int {
        return $this->quantity_available;
    }

    /**
     * @param mixed $quantity_available
     */
    public function setQuantityAvailable($quantity_available): void {
        $this->quantity_available = $quantity_available;
    }

    /**
     * @return mixed
     */
    public function getMinStock(): int {
        return $this->min_stock;
    }

    /**
     * @param mixed $min_stock
     */
    public function setMinStock($min_stock): void {
        $this->min_stock = $min_stock;
    }

    /**
     * @return mixed
     */
    public function getMinReorder(): int {
        return $this->min_reorder;
    }

    /**
     * @param mixed $min_reorder
     */
    public function setMinReorder($min_reorder): void {
        $this->min_reorder = $min_reorder;
    }

    /**
     * @return mixed
     */
    public function getPriceSupplier(): float {
        return $this->price_supplier;
    }

    /**
     * @param mixed $price_supplier
     */
    public function setPriceSupplier($price_supplier): void {
        $this->price_supplier = $price_supplier;
    }

    /**
     * @return mixed
     */
    public function getPriceCustomer(): float {
        return $this->price_customer;
    }

    /**
     * @param mixed $price_customer
     */
    public function setPriceCustomer($price_customer): void {
        $this->price_customer = $price_customer;
    }

    /**
     * @return mixed
     */
    public function getProductBarcode(): string {
        return $this->product_barcode;
    }

    /**
     * @param mixed $product_barcode
     */
    public function setProductBarcode($product_barcode): void {
        $this->product_barcode = $product_barcode;
    }

    /**
     * @return mixed
     */
    public function getProductCode(): string {
        return $this->product_code;
    }

    /**
     * @param mixed $product_code
     */
    public function setProductCode($product_code): void {
        $this->product_code = $product_code;
    }

    /**
     * @return mixed
     */
    public function getNote(): string {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getBrand(): string {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getSupplierId(): int {
        return $this->supplier_id;
    }

    /**
     * @param mixed $supplier_id
     */
    public function setSupplierId($supplier_id): void {
        $this->supplier_id = $supplier_id;
    }





    public function category() {
        return $this->belongsTo('App\ProductCategory');
    }

    public function supplier() {
        return $this->belongsTo('App\Supplier');
    }

}
