<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FidelityCard extends Model {

    protected $table = 'fidelity_cards';

    protected $customer_id;
    protected $f_solar_shower;
    protected $n_solar_shower;
    protected $f_trifacial;
    protected $n_trifacial;
    protected $f_esthetics;
    protected $n_estetichs;
    protected $note;

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

    /**
     * @return mixed
     */
    public function getFSolarShower(): boolean {
        return $this->f_solar_shower;
    }

    /**
     * @param mixed $f_solar_shower
     */
    public function setFSolarShower($f_solar_shower): void {
        $this->f_solar_shower = $f_solar_shower;
    }

    /**
     * @return mixed
     */
    public function getNSolarShower(): int {
        return $this->n_solar_shower;
    }

    /**
     * @param mixed $n_solar_shower
     */
    public function setNSolarShower($n_solar_shower): void {
        $this->n_solar_shower = $n_solar_shower;
    }

    /**
     * @return mixed
     */
    public function getFTrifacial(): boolean {
        return $this->f_trifacial;
    }

    /**
     * @param mixed $f_trifacial
     */
    public function setFTrifacial($f_trifacial): void {
        $this->f_trifacial = $f_trifacial;
    }

    /**
     * @return mixed
     */
    public function getNTrifacial(): int {
        return $this->n_trifacial;
    }

    /**
     * @param mixed $n_trifacial
     */
    public function setNTrifacial($n_trifacial): void {
        $this->n_trifacial = $n_trifacial;
    }

    /**
     * @return mixed
     */
    public function getFEsthetics(): boolean {
        return $this->f_esthetics;
    }

    /**
     * @param mixed $f_esthetics
     */
    public function setFEsthetics($f_esthetics): void {
        $this->f_esthetics = $f_esthetics;
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
    public function getNEstetichs(): integer {
        return $this->n_estetichs;
    }

    /**
     * @param mixed $f_estetichs
     */
    public function setNEstetichs($n_estetichs): void {
        $this->n_estetichs = $n_estetichs;
    }

    public function customer() {
        return $this->belongsTo('App\Customer');
    }



}
