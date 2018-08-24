<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollaboratorRole extends Model{

    public function collaborator(){
        return $this->hasMany('App\Collaborator');
    }

}
