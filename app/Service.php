<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

    protected $table = 'services';

    protected $code;
    protected $description;
    protected $float;
    protected $duration;
    protected $category_id;
    protected $note;

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
    public function getFloat(): float {
        return $this->float;
    }

    /**
     * @param mixed $float
     */
    public function setFloat($float): void {
        $this->float = $float;
    }

    /**
     * @return mixed
     */
    public function getDuration(): time {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration): void {
        $this->duration = $duration;
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
    public function getNote(): string {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void {
        $this->note = $note;
    }



    public function category(){
        return $this->hasOne('App\ServiceCategory');
    }

    public function collaborators(){
        return $this->belongsToMany('App\Customer');
    }
}
