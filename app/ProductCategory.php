<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model {

    protected $table = 'product_categories';

    protected $code;
    protected $description;
    protected $utilization;
    protected $color_label;

    /**
     * @return mixed
     */
    public function getCode() : string {
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
    public function getUtilization(): string {
        return $this->utilization;
    }

    /**
     * @param mixed $utilization
     */
    public function setUtilization($utilization): void {
        $this->utilization = $utilization;
    }

    /**
     * @return mixed
     */
    public function getColorLabel(): string {
        return $this->color_label;
    }

    /**
     * @param mixed $color_label
     */
    public function setColorLabel($color_label): void {
        $this->color_label = $color_label;
    }



    public function products(){
        return $this->hasMany('App\Product');
    }


}
