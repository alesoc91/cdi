<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {

    protected $table = 'suppliers';

    protected $name;
    protected $lastname;
    protected $company;
    protected $address;
    protected $city;
    protected $phone;
    protected $business_name;
    protected $vat_number;


    /**
     * @return mixed
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastname(): string {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getCompany(): string {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getAddress(): string {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity(): string {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPhone(): string {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getBusinessName(): string {
        return $this->business_name;
    }

    /**
     * @param mixed $business_name
     */
    public function setBusinessName($business_name): void {
        $this->business_name = $business_name;
    }

    /**
     * @return mixed
     */
    public function getVatNumber(): string {
        return $this->vat_number;
    }

    /**
     * @param mixed $vat_number
     */
    public function setVatNumber($vat_number): void {
        $this->vat_number = $vat_number;
    }


    public function products(){
        return $this->hasMany('App\Product');
    }


}
