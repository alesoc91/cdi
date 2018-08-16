<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenderType extends Model
{
    protected $table = 'gender_types';

    protected $fillable = [
        'id', 'code', 'description'
    ];

}
