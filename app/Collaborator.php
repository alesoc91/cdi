<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model{

    protected $table = 'collaborators';
    protected $name='';
    protected $lastname='';

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    protected $fillable = [
        'name','lastname', 'role_id'
    ];

    public function role() {
        return $this->belongsTo('App\CollaboratorRole');
    }

    public function services(){
        return $this->belongsToMany('App\Service');
    }
}
