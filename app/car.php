<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $casts = [
        'Make'     => 'string',
        'Model'    => 'string',
        'YEAR'     => 'integer',
    ];

}
