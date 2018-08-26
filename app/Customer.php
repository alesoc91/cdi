<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{

    protected $table = 'customers';

    protected $name;
    protected $lastname;
    protected $fiscal_code;
    protected $gender;
    protected $birth_date;
    protected $city;
    protected $address;
    protected $email;
    protected $primary_number;
    protected $secondary_number;
    protected $note;
    protected $from_online;
    protected $registration_date;

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
    public function getFiscalCode(): string {
        return $this->fiscal_code;
    }

    /**
     * @param mixed $fiscal_code
     */
    public function setFiscalCode($fiscal_code): void {
        $this->fiscal_code = $fiscal_code;
    }

    /**
     * @return mixed
     */
    public function getGender(): string {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getBirthDate(): string { // TODO: data o stringa?
        return $this->birth_date;
    }

    /**
     * @param mixed $birth_date
     */
    public function setBirthDate($birth_date): void {
        $this->birth_date = $birth_date;
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
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPrimaryNumber(): string { // TODO: giusto che torni uan stringa? controllare sulla create table
        return $this->primary_number;
    }

    /**
     * @param mixed $primary_number
     */
    public function setPrimaryNumber($primary_number): void {
        $this->primary_number = $primary_number;
    }

    /**
     * @return mixed
     */
    public function getSecondaryNumber(): string { // TODO: stessa cosa
        return $this->secondary_number;
    }

    /**
     * @param mixed $secondary_number
     */
    public function setSecondaryNumber($secondary_number): void {
        $this->secondary_number = $secondary_number;
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
    public function getFromOnline(): boolean {
        return $this->from_online;
    }

    /**
     * @param mixed $from_online
     */
    public function setFromOnline($from_online): void {
        $this->from_online = $from_online;
    }

    /**
     * @return mixed
     */
    public function getRegistrationDate(): string { // TODO: stringa o data?
        return $this->registration_date;
    }

    /**
     * @param mixed $registration_date
     */
    public function setRegistrationDate($registration_date): void {
        $this->registration_date = $registration_date;
    }


    public function fideltyCard(){
        return $this->hasOne('App\FidelityCard');
    }


    public function promotions(){
        return $this->hasMany('App\Promotion');
    }

}
