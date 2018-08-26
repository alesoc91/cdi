<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model {


    protected $table = 'promotions';

    protected $code;
    protected $description;
    protected $n_services;
    protected $n_products;
    protected $n_sitting_service;
    protected $total_amount;
    protected $deposit_amount;
    protected $customer_id;

    /**
     * @return mixed
     */
    public function getCode(): string {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void {
        $this->code = $code;
    }

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
    public function getNServices(): int {
        return $this->n_services;
    }

    /**
     * @param mixed $n_services
     */
    public function setNServices($n_services): void {
        $this->n_services = $n_services;
    }

    /**
     * @return mixed
     */
    public function getNProducts(): int {
        return $this->n_products;
    }

    /**
     * @param mixed $n_products
     */
    public function setNProducts($n_products): void {
        $this->n_products = $n_products;
    }

    /**
     * @return mixed
     */
    public function getNSittingService(): int {
        return $this->n_sitting_service;
    }

    /**
     * @param mixed $n_sitting_service
     */
    public function setNSittingService($n_sitting_service): void {
        $this->n_sitting_service = $n_sitting_service;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount(): float {
        return $this->total_amount;
    }

    /**
     * @param mixed $total_amount
     */
    public function setTotalAmount($total_amount): void {
        $this->total_amount = $total_amount;
    }

    /**
     * @return mixed
     */
    public function getDepositAmount(): float {
        return $this->deposit_amount;
    }

    /**
     * @param mixed $deposit_amount
     */
    public function setDepositAmount($deposit_amount): void {
        $this->deposit_amount = $deposit_amount;
    }

    /**
     * @return mixed
     */
    public function getCustomerId(): int {
        return $this->customer_id;
    }

    /**
     * @param mixed $customer_id
     */
    public function setCustomerId($customer_id): void {
        $this->customer_id = $customer_id;
    }




    public function customer(){
        return $this->belongsTo('App\Customer');
    }


}
