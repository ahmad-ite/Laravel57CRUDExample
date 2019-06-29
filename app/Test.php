<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'f_name',
        'last_name',
        'email',
        'position',
        'information',
        'cv',
        'certificates'
    ];
}
