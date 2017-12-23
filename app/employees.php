<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;

use illuminate\database\eloquent\Model;

class employees extends Model implements Authenticatable
{
   use \Illuminate\Auth\Authenticatable;



    protected $fillable = [
        'name', 'email', 'password',
    ];
}
