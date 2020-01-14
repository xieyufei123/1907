<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $primaryKey = 'bid';
    public $timestamps = false;
    protected $guarded=[];
}
