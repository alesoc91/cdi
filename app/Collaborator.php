<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model{

    protected $table = 'collaborators';

    protected $fillable = [
        'name','lastname', 'role_id'
    ];
}
