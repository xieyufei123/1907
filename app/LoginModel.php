<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
     protected $table = 'login';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded=[];
}
